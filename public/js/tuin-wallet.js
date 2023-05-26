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
const tuinTokenSupply = document.getElementById("tuinTokenSupply");
const tuinBscSupply = document.getElementById("tuinBscSupply");
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

            const poolContract = new ethers.Contract(
                poolContractAddress,
                poolABI,
                signer
            );
        } catch (error) {
            console.log(error);
        }

        connectWalletButton.innerHTML = "Connected";
    }
}

const showDataButton = document.getElementById("showData");
showDataButton.onclick = data;

async function data() {
    if (typeof window.ethereum !== "undefined") {
        try {
            await window.ethereum.request({ method: "eth_requestAccounts" });
            const provider = new ethers.providers.Web3Provider(window.ethereum);
            const signer = provider.getSigner();

            // token
            const tokenContract = new ethers.Contract(
                tokenContractAddress,
                tokenABI,
                signer
            );

            console.log("token contract: ");
            console.log(tokenContract);

            const tuinToken = await tokenContract.getChainTotalSupply(true);
            const supplyTuinToken = ethers.utils.formatEther(
                tuinToken.toString()
            );
            const tuinBsc = await tokenContract.getChainTotalSupply(false);
            const supplyTuinBsc = ethers.utils.formatEther(tuinBsc.toString());

            tuinTokenSupply.innerHTML =
                "TUIN ETH: " + supplyTuinToken.toString();
            tuinBscSupply.innerHTML = "TUIN BSC: " + supplyTuinBsc.toString();

            const maxSupply = await tokenContract.maxSupply();
            const maxSupplyRT = ethers.utils.formatEther(maxSupply.toString());
            console.log(maxSupplyRT);

            // pool
            const poolContract = new ethers.Contract(
                poolContractAddress,
                poolABI,
                signer
            );
            console.log("pool contract: ");
            console.log(poolContract);

            // WALLET
            const walletContract = new ethers.Contract(
                walletContractAddress,
                walletABI,
                signer
            );
            console.log("wallet contract: ");
            console.log(walletContract);

            console.log(balance.toString());
        } catch (error) {
            console.log(error);
        }

        connectWalletButton.innerHTML = "Connected";
    }
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
            const response = await contract.setExchangeRate(value);
            console.log(response);
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
            const response = await contract.setAcceptedToken1(value);
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
