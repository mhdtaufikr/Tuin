import { ethers } from "./ethers-5.1.esm.min.js";
import { TTContractAddress, abi } from "./constants.js";

const USDTAmountTitle = document.getElementById("USDTAmountTitle");
const TTAmountTitle = document.getElementById("TTAmountTitle");
const fundButton = document.getElementById("fundButton");
const USDTAmount = document.getElementById("USDTAmount");
const TTAmount = document.getElementById("TTAmount");
const BalanceWording = "Balance: ";
fundButton.onclick = fund;
let initBalance;
let USDTAmountVar, TTAmountVar;
let multiplier = 3;

document.addEventListener("DOMContentLoaded", connect());
USDTAmount.addEventListener("change", USDTInputListener);
TTAmount.addEventListener("change", TTInputListener);

async function connect() {
    if (window.ethereum !== "undefined") {
        try {
            await window.ethereum.request({ method: "eth_requestAccounts" });
        } catch (error) {
            console.log(error);
        }
        await getBalance();
    }
}

async function getBalance() {
    if (window.ethereum !== "undefined") {
        try {
            const provider = new ethers.providers.Web3Provider(window.ethereum);
            initBalance = await provider.getBalance(TTContractAddress);
            USDTAmountVar = initBalance.toNumber();
            TTAmountVar = initBalance.toNumber();
            USDTAmountTitle.innerHTML = BalanceWording + initBalance.toNumber();
            TTAmountTitle.innerHTML = BalanceWording + initBalance.toNumber();
        } catch (error) {
            console.log(error);
        }
    }
}

async function fund() {
    console.log(`Funding with ${TTAmount.value}...`);
    if (typeof window.ethereum !== "undefined") {
        const provider = new ethers.providers.Web3Provider(window.ethereum);
        const signer = provider.getSigner();
        console.log(provider);
        // const contract = new ethers.Contract(TTContractAddress, abi, signer);
        // try {
        //     const transactionResponse = await contract.fund({
        //         value: ethers.utils.parseEther(ethAmount),
        //     });
        //     await transactionResponse.wait(1);
        // } catch (error) {
        //     console.log(error);
        // }
    }
}

function USDTInputListener(e) {
    USDTAmountVar =
        parseFloat(e.target.value) * parseFloat(multiplier) +
        parseFloat(initBalance.toNumber());
    TTAmount.value = parseFloat(USDTAmountVar);
}

function TTInputListener(e) {
    TTAmountVar =
        parseFloat(e.target.value) / parseFloat(multiplier) +
        parseFloat(initBalance.toNumber());
    USDTAmount.value = parseFloat(TTAmountVar);
}
