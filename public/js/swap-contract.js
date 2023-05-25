import { ethers } from "./ethers-5.6.esm.min.js";
import {
    TUINPOOLabi,
    contractAddress,
    balanceWording,
    USDTContractAddress,
} from "./constants.js";
import { TUINabi } from "./constants.js";

const connectWalletButton = document.getElementById("connectWallet");

// const USDTBalance = document.getElementById("USDTBalance");
const TTBalance = document.getElementById("TTBalance");

const USDTAmount = document.getElementById("USDTAmount");
const TTAmount = document.getElementById("TTAmount");

const fundButton = document.getElementById("fundButton");

fundButton.onclick = fund;
connectWalletButton.onclick = connect;

let initBalance, USDTAmountVar, TTAmountVar, account;

// USDTAmount.addEventListener("change", USDTInputListener);
// TTAmount.addEventListener("change", TTInputListener);

async function connect() {
    if (window.ethereum !== "undefined") {
        try {
            await window.ethereum.request({ method: "eth_requestAccounts" });
        } catch (error) {
            console.log(error);
        }

        connectWalletButton.innerHTML = "Connected";
        // await getBalance();
    }
}

async function getBalance() {
    if (window.ethereum !== "undefined") {
        try {
            const provider = new ethers.providers.Web3Provider(window.ethereum);
            provider.getBalance(contractAddress).then((balance) => {
                initBalance = ethers.utils.formatEther(balance);

                USDTAmountVar = initBalance;
                TTAmountVar = initBalance;

                // USDTBalance.innerHTML = balanceWording + initBalance;
                TTBalance.innerHTML = balanceWording + initBalance;
            });
        } catch (error) {
            console.log(error);
        }
    }
}

async function fund() {
    if (typeof window.ethereum !== "undefined") {
        const provider = new ethers.providers.Web3Provider(window.ethereum);
        const signer = provider.getSigner();
        const poolContract = new ethers.Contract(
            contractAddress,
            TUINPOOLabi,
            signer
        );
        const tokenContract = new ethers.Contract(
            contractAddress,
            TUINabi,
            signer
        );
        console.log(poolContract);
        console.log(tokenContract);

        try {
            // const response = await contract.swapIn(
            //     parseFloat(TTAmount.value),
            //     USDTContractAddress,
            //     contractAddress
            // );
            // console.log(response);
        } catch (error) {
            console.log(error);
        }
    }
}

async function getETHPrice() {}

// function USDTInputListener(e) {
//     USDTAmountVar =
//         parseFloat(e.target.value) + parseFloat(initBalance.toNumber());
//     TTAmount.value = parseFloat(USDTAmountVar);
// }

// function TTInputListener(e) {
//     TTAmountVar =
//         parseFloat(e.target.value) + parseFloat(initBalance.toNumber());
//     USDTAmount.value = parseFloat(TTAmountVar);
// }
