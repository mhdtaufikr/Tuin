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

//
//
// Declare variables
//
//
let fromValue, toValue, exchangeRate;

//
//
// Check if user connected when page loaded
//
//
window.addEventListener("DOMContentLoaded", onWebLoad);
async function onWebLoad() {
    TTBalance.innerHTML = "Balance: 0";
    // fromBalance.innerHTML = "Balance: 0";
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

$(".dropdown-item").click(function () {
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
});

//
//
// Handle 'Connect' Button and Display Balance
//
//
const TTBalance = document.getElementById("TTBalance");
// const fromBalance = document.getElementById("fromBalance");
const connectWalletButton = document.getElementById("connectWallet");
connectWalletButton.onclick = connect;

async function connect() {
    if (typeof window.ethereum !== "undefined") {
        try {
            await window.ethereum.request({ method: "eth_requestAccounts" });
            const provider = new ethers.providers.Web3Provider(window.ethereum);
            const signer = provider.getSigner();
            const tokenContract = new ethers.Contract(
                tokenContractAddress,
                tokenABI,
                signer
            );

            const account = await window.ethereum.request({
                method: "eth_accounts",
            });
            await tokenContract.balanceOf(account.toString()).then((value) => {
                const balance = ethers.utils.formatEther(value);
                TTBalance.innerHTML = "Balance: " + balance.toString();
            });

            const poolContract = new ethers.Contract(
                poolContractAddress,
                poolABI,
                signer
            );

            const tmpExchangeRate = await poolContract.exchangeRate();
            exchangeRate = tmpExchangeRate;
        } catch (error) {
            console.log(error);
        }

        connectWalletButton.innerHTML = "Connected";
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
                const account = await window.ethereum.request({
                    method: "eth_accounts",
                });
                const provider = new ethers.providers.Web3Provider(
                    window.ethereum
                );

                const signer = provider.getSigner();
                const poolContract = new ethers.Contract(
                    poolContractAddress,
                    poolABI,
                    signer
                );

                const tokenContract = new ethers.Contract(
                    tokenContractAddress,
                    tokenABI,
                    signer
                );

                // console.log("poolContract: ");
                // console.log(poolContract);
                // console.log("tokenContract: ");
                // console.log(tokenContract);
                // console.log("poolContractOwner: ");
                // console.log(poolContract.owner());
                // console.log("tokenContractOwner: ");
                // console.log(tokenContract.owner());
                // console.log("currentAccount: ");
                // console.log(account);
                // console.log("exchangeRate: ");
                // const exchangeRate = await poolContract.exchangeRate();
                // console.log(exchangeRate.toString());
                // const acceptedToken1 = await poolContract.acceptedToken1();
                // console.log("acceptedToken1: ");
                // console.log(acceptedToken1);

                // console.log(toValue);
                if (toValue !== "undefined" && toValue >= 1) {
                    if (fromValue !== "undefined" && fromValue >= 1) {
                        const response = await poolContract
                            .swapIn(
                                ethers.utils.parseEther(toValue.toString()),
                                selectedToken,
                                tokenContractAddress
                            )
                            .then((res) => {
                                console.log(
                                    ethers.utils.formatEther(res.value)
                                );
                            });
                        console.log("response: ");
                        console.log(response);
                    }
                }
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
    toValue =
        parseFloat(e.target.value != "" ? e.target.value : 0) *
        parseFloat(exchangeRate);
    ToInput.value = toValue;
}

function ToInputListener(e) {
    console.log("e: ");
    console.log(e.target.value);
    fromValue =
        parseFloat(e.target.value != "" ? e.target.value : 0) /
        parseFloat(exchangeRate);

    console.log("toValue: ");
    console.log(toValue);
    FromInput.value = fromValue;
}
