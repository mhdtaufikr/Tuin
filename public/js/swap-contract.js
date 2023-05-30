import { ethers } from "./ethers-5.6.esm.min.js";
import {
    poolABI,
    tokenContractAddress,
    USDTContractAddress,
    USDCContractAddress,
    BUSDContractAddress,
    poolContractAddress,
    tokenABI,
} from "./constants.js";
import { formatNumber } from "./helper.js";

//
//
// Declare variables
//
//
let fromValue,
    toValue,
    exchangeRate,
    isProcessing = false;

//
//
// Check if user connected when page loaded
//
//
window.addEventListener("DOMContentLoaded", onWebLoad);
async function onWebLoad() {
    if (typeof window.ethereum !== "undefined") {
        const account = await window.ethereum.request({
            method: "eth_accounts",
        });
        if (account != "") {
            await connect();
        }
    }
}

//
//
// Handle Token Changing
//
//
var selectedToken = "";

$(".dropdown-item").click(async function () {
    var selectedOption = $(this);
    var value = selectedOption.data("value");
    if (value == "usdc") {
        selectedToken = USDCContractAddress;
    } else if (value == "usdt") {
        selectedToken = USDTContractAddress;
    } else if (value == "busd") {
        selectedToken = BUSDContractAddress;
    } else {
        selectedToken = "default";
    }
    await getFromBalance();
});

//
//
// Handle 'Connect' Button and Display Balance
//
//
const connectWalletButton = document.getElementById("connectWallet");
connectWalletButton.onclick = connect;

async function connect() {
    if (typeof window.ethereum !== "undefined") {
        try {
            await window.ethereum.request({ method: "eth_requestAccounts" });
            const tokenContract = await contract(
                tokenContractAddress,
                tokenABI
            );

            const account = await window.ethereum.request({
                method: "eth_accounts",
            });

            const TTBalance = document.getElementById("TTBalance");
            const getBalance = await tokenContract.balanceOf(
                account.toString()
            );
            const balance = ethers.utils.formatEther(getBalance);
            TTBalance.innerHTML += formatNumber(balance);

            const poolContract = await contract(poolContractAddress, poolABI);
            const tmpExchangeRate = await poolContract.exchangeRateTuin();
            exchangeRate = ethers.utils.formatUnits(tmpExchangeRate, 0);
        } catch (error) {
            console.log(error);
        }

        connectWalletButton.innerHTML = "Connected";
    }
}

//
// Get Balance
//
async function getFromBalance() {
    const FromBalance = document.getElementById("fromBalance");
    if (typeof window.ethereum !== "undefined") {
        try {
            const account = await window.ethereum.request({
                method: "eth_accounts",
            });
            const selectedTokenContract = await contract(
                selectedToken,
                tokenABI
            );
            const getBalance = await selectedTokenContract.balanceOf(
                account.toString()
            );

            FromBalance.innerHTML =
                "Balance: " +
                formatNumber(ethers.utils.formatUnits(getBalance, 6));
        } catch (error) {
            console.log(error);
        }
    }
}

//
//
// Handle 'Swap' Button
//
//
const swapButton = document.getElementById("swapButton");
swapButton.onclick = swap;
async function swap() {
    if (typeof window.ethereum !== "undefined") {
        const selectCurrencyMessage = document.getElementById(
            "selectCurrencyMessage"
        );
        if (selectedToken != "" && selectedToken != "default") {
            selectCurrencyMessage.innerHTML = "";
            try {
                const selectedTokenContract = await contract(
                    selectedToken,
                    tokenABI
                );
                const selectedTokenDecimals =
                    await selectedTokenContract.decimals();

                const poolContract = await contract(
                    poolContractAddress,
                    poolABI
                );

                const swapin = await poolContract.swapIn(
                    ethers.utils.parseUnits(
                        fromValue.toString(),
                        selectedTokenDecimals
                    ),
                    selectedToken,
                    tokenContractAddress
                );
                // isProcessing = true;
                // document.body.innerHTML = "Processing";
                await swapin.wait();
                // isProcessing = false;
                window.location.reload();
            } catch (error) {
                console.log(error);
            }
        } else if (selectedToken == "" || selectedToken == "default") {
            selectCurrencyMessage.innerHTML = "Please choose a token!";
        }
    }
}

//
//
// Handle Input Value
//
//
const FromInput = document.getElementById("FromInput");
const ToInput = document.getElementById("ToInput");
FromInput.addEventListener("input", FromInputListener);
ToInput.addEventListener("input", ToInputListener);

function FromInputListener(e) {
    fromValue = parseFloat(e.target.value);
    toValue =
        parseFloat(e.target.value != "" ? e.target.value : 0) *
        parseFloat(exchangeRate);
    ToInput.value = toValue;
}

function ToInputListener(e) {
    toValue = parseFloat(e.target.value);
    fromValue =
        parseFloat(e.target.value != "" ? e.target.value : 0) /
        parseFloat(exchangeRate);
    FromInput.value = fromValue;
}

//
// Contract
//
async function contract(contractAddress, abi) {
    const contract = new ethers.Contract(contractAddress, abi, getSigner());
    return contract;
}

//
//
// Get Signer
//
//
function getSigner() {
    const provider = new ethers.providers.Web3Provider(window.ethereum);
    const signer = provider.getSigner();
    return signer;
}
