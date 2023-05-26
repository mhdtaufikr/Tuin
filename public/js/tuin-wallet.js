import { ethers } from "./ethers-5.6.esm.min.js";
import {
    tokenContractAddress,
    tokenABI,
    poolABI,
    walletABI,
    poolContractAddress,
    walletContractAddress,
} from "./constants.js";

//
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
// Handle 'Connect' Button and Display Balance
//
//
const connectWalletButton = document.getElementById("connectWallet");
connectWalletButton.onclick = connect;

async function connect() {
    if (typeof window.ethereum !== "undefined") {
        try {
            await window.ethereum.request({ method: "eth_requestAccounts" });

            await tokenTTContract().then(async (value) => {
                //
                // Get tuin token supply and display it
                //
                await getChainTokenTotalSupply(value);

                //
                // Get tuin token bsc supply and display it
                //
                await getChainBscTotalSupply(value);
            });

            await poolTTContract().then(async (value) => {
                //
                // Get accepted token 1
                //
                await getAcceptedToken1(value);

                //
                // Get accepted token 2
                //
                await getAcceptedToken2(value);

                //
                // Get accepted token 3
                //
                await getAcceptedToken3(value);

                //
                // Get exchange rate
                //
                await getExchangeRate(value);

                //
                // Get TUIN held
                //
                // await getTuinHeld(value);
            });

            await walletTTContract().then(async (value) => {});
        } catch (error) {
            console.log(error);
        }

        connectWalletButton.innerHTML = "Connected";
    }
}

function getSigner() {
    const provider = new ethers.providers.Web3Provider(window.ethereum);
    const signer = provider.getSigner();
    return signer;
}

async function poolTTContract() {
    const contract = new ethers.Contract(
        poolContractAddress,
        poolABI,
        getSigner()
    );
    return contract;
}

async function walletTTContract() {
    const contract = new ethers.Contract(
        walletContractAddress,
        walletABI,
        getSigner()
    );
    return contract;
}

async function tokenTTContract() {
    const contract = new ethers.Contract(
        tokenContractAddress,
        tokenABI,
        getSigner()
    );
    return contract;
}

async function getChainTokenTotalSupply(contract) {
    const tuinTokenSupply = document.getElementById("tuinTokenSupply");
    const tuinToken = await contract.getChainTotalSupply(true);
    const supplyTuinToken = ethers.utils.formatEther(tuinToken.toString());
    tuinTokenSupply.innerHTML =
        "TOTAL SUPPLY TUIN ETH: " + supplyTuinToken.toString();
}

async function getChainBscTotalSupply(contract) {
    const tuinBscSupply = document.getElementById("tuinBscSupply");
    const tuinBSC = await contract.getChainTotalSupply(false);
    const supplyTuinBsc = ethers.utils.formatEther(tuinBSC.toString());
    tuinBscSupply.innerHTML =
        "TOTAL SUPPLY TUIN BSC: " + supplyTuinBsc.toString();
}

async function getAcceptedToken1(contract) {
    const acceptedToken1 = document.getElementById("acceptedToken1");
    const acceptedToken = await contract.acceptedToken1();
    acceptedToken1.innerHTML = "ACCEPTED TOKEN 1: " + acceptedToken.toString();
}

async function getAcceptedToken2(contract) {
    const acceptedToken2 = document.getElementById("acceptedToken2");
    const acceptedToken = await contract.acceptedToken2();
    acceptedToken2.innerHTML = "ACCEPTED TOKEN 2: " + acceptedToken.toString();
}

async function getAcceptedToken3(contract) {
    const acceptedToken3 = document.getElementById("acceptedToken3");
    const acceptedToken = await contract.acceptedToken3();
    acceptedToken3.innerHTML = "ACCEPTED TOKEN 3: " + acceptedToken.toString();
}

async function getTuinHeld(contract) {
    const tuinHeld = document.getElementById("tuinHeld");
    const held = await contract.tuinHeld(tokenContractAddress);
    tuinHeld.innerHTML =
        "TUIN HELD: " + ethers.utils.formatEther(held.value).toString();
}

async function getExchangeRate(contract) {
    const exchangeRate = document.getElementById("exchangeRate");
    const response = await contract.exchangeRate();
    exchangeRate.innerHTML = "EXCHANGE RATE: " + response.toString();
}

//
//
// Set Exchange Rate
//
//
const exchangeRateInput = document.getElementById("exchangeRateInput");
const exchangeRateSubmitButton = document.getElementById(
    "setExchangeRateSubmitButton"
);
exchangeRateSubmitButton.onclick = setExchangeRate;
async function setExchangeRate() {
    if (typeof window.ethereum !== "undefined") {
        try {
            await window.ethereum.request({ method: "eth_requestAccounts" });
            const provider = new ethers.providers.Web3Provider(window.ethereum);
            const signer = provider.getSigner();
            const contract = new ethers.Contract(
                poolContractAddress,
                poolABI,
                signer
            );
            const value = exchangeRateInput.value;
            await contract.setExchangeRate(value);
        } catch (error) {
            console.log(error);
        }
    }
}

//
//
// Set Accepted Token 1
//
//
const acceptedToken1Input = document.getElementById("acceptedToken1Input");
const acceptedToken1SubmitButton = document.getElementById(
    "setAcceptedToken1SubmitButton"
);
acceptedToken1SubmitButton.onclick = setAcceptedToken1;
async function setAcceptedToken1() {
    if (typeof window.ethereum !== "undefined") {
        try {
            await window.ethereum.request({ method: "eth_requestAccounts" });
            const provider = new ethers.providers.Web3Provider(window.ethereum);
            const signer = provider.getSigner();
            const contract = new ethers.Contract(
                poolContractAddress,
                poolABI,
                signer
            );
            const value = acceptedToken1Input.value;
            await contract.setAcceptedToken1(value);
            console.log(response);
        } catch (error) {
            console.log(error);
        }
    }
}

//
//
// Set Accepted Token 2
//
//
const acceptedToken2Input = document.getElementById("acceptedToken2Input");
const acceptedToken2SubmitButton = document.getElementById(
    "setAcceptedToken2SubmitButton"
);
acceptedToken2SubmitButton.onclick = setAcceptedToken2;
async function setAcceptedToken2() {
    if (typeof window.ethereum !== "undefined") {
        try {
            await window.ethereum.request({ method: "eth_requestAccounts" });
            const provider = new ethers.providers.Web3Provider(window.ethereum);
            const signer = provider.getSigner();
            const contract = new ethers.Contract(
                poolContractAddress,
                poolABI,
                signer
            );
            const value = acceptedToken2Input.value;
            const response = await contract.setAcceptedToken2(value);
            console.log(response);
        } catch (error) {
            console.log(error);
        }
    }
}

//
//
// Set Accepted Token 3
//
//
const acceptedToken3Input = document.getElementById("acceptedToken3Input");
const acceptedToken3SubmitButton = document.getElementById(
    "setAcceptedToken3SubmitButton"
);
acceptedToken3SubmitButton.onclick = setAcceptedToken3;
async function setAcceptedToken3() {
    if (typeof window.ethereum !== "undefined") {
        try {
            await window.ethereum.request({ method: "eth_requestAccounts" });
            const provider = new ethers.providers.Web3Provider(window.ethereum);
            const signer = provider.getSigner();
            const contract = new ethers.Contract(
                poolContractAddress,
                poolABI,
                signer
            );
            const value = acceptedToken3Input.value;
            const response = await contract.setAcceptedToken3(value);
            console.log(response);
        } catch (error) {
            console.log(error);
        }
    }
}
