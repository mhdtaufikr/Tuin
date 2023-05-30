import { ethers } from "./ethers-5.6.esm.min.js";
import {
    tokenContractAddress,
    tokenABI,
    poolABI,
    walletABI,
    poolContractAddress,
    walletContractAddress,
    USDCContractAddress,
    USDTContractAddress,
    BUSDContractAddress,
} from "./constants.js";
import { formatNumber } from "./helper.js";

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

            await getContract(tokenContractAddress, tokenABI).then(
                async (value) => {
                    //
                    // Get token address
                    //
                    await getTokenAddress(value);

                    //
                    // Get token owner
                    //
                    await getTokenOwner(value);

                    //
                    // Get pool
                    //
                    await getPool(value);

                    //
                    // Get name
                    //
                    await getName(value);

                    //
                    // Get symbol
                    //
                    await getSymbol(value);

                    //
                    // Get init max supply on ETH
                    //
                    await getInit_maxsupply_on_eth(value);

                    //
                    // Get init max supply on BSC
                    //
                    await getInit_maxsupply_on_bsc(value);

                    //
                    // Get max supply
                    //
                    await getMaxSupply(value);

                    //
                    // Get total supply
                    //
                    await getTotalSupply(value);
                    //
                    // Get tuin token supply and display it
                    //
                    await getMaxsupply_on_eth(value);

                    //
                    // Get tuin token bsc supply and display it
                    //
                    await getMaxsupply_on_bsc(value);

                    //
                    // Get decimals
                    //
                    await getDecimals(value);
                }
            );

            await getContract(poolContractAddress, poolABI).then(
                async (value) => {
                    //
                    // Get pool address
                    //
                    await getPoolAddress(value);

                    //
                    // Get pool owner
                    //
                    await getPoolOwner(value);

                    //
                    // Get deployment chain ID
                    //
                    await getDeploymentChainId(value);

                    //
                    // Get tuin held
                    //
                    await getTuinHeld(value);

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
                    // Get amount deposited accepted token 1
                    //
                    await getAmountDepositedAcceptedToken1(value);

                    //
                    // Get amount deposited accepted token 2
                    //
                    await getAmountDepositedAcceptedToken2(value);

                    //
                    // Get amount deposited accepted token 3
                    //
                    await getAmountDepositedAcceptedToken3(value);

                    //
                    // Get amount withdrawn accepted token 1
                    //
                    await getAmountWithdrawnacceptedToken1(value);

                    //
                    // Get amount withdrawn accepted token 2
                    //
                    await getAmountWithdrawnacceptedToken2(value);

                    //
                    // Get amount withdrawn accepted token 3
                    //
                    await getAmountWithdrawnacceptedToken3(value);

                    //
                    // Get exchange rate TUIN
                    //
                    await getExchangeRateTuin(value);

                    //
                    // Get exchange rate USD
                    //
                    await getExchangeRateUsd(value);

                    //
                    // Get yield token
                    //
                    await getYieldToken(value);

                    //
                    // Get is approved
                    //
                    await getIsApproved(value);

                    //
                    // Get is paused
                    //
                    await getIsPaused(value);
                }
            );

            await getContract(walletContractAddress, walletABI).then(
                async (value) => {
                    //
                    // Get wallet address
                    //
                    await getWalletAddress(value);

                    //
                    // Get wallet owner
                    //
                    await getWalletOwner(value);
                }
            );
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

async function getContract(contractAddress, abi) {
    const contract = new ethers.Contract(contractAddress, abi, getSigner());
    return contract;
}
//
//
// Token Contract
//
//
async function getTokenOwner(contract) {
    const html = document.getElementById("tokenOwner");
    const response = await contract.owner();
    html.innerHTML += response.toString();
}

async function getTokenAddress(contract) {
    const tokenAddress = document.getElementById("tokenAddress");
    const response = await contract.address;
    tokenAddress.innerHTML += response.toString();
}

async function getMaxsupply_on_eth(contract) {
    const html = document.getElementById("maxsupply_on_eth");
    const response = await contract.maxsupply_on_eth();
    html.innerHTML += formatNumber(ethers.utils.formatEther(response));
}

async function getMaxsupply_on_bsc(contract) {
    const html = document.getElementById("maxsupply_on_bsc");
    const response = await contract.maxsupply_on_bsc();
    html.innerHTML += formatNumber(ethers.utils.formatEther(response));
}

async function getInit_maxsupply_on_eth(contract) {
    const initMaxSupplyOnEth = document.getElementById("init_maxsupply_on_eth");
    const response = await contract.init_maxsupply_on_eth();
    initMaxSupplyOnEth.innerHTML += formatNumber(
        ethers.utils.formatEther(response)
    );
}

async function getInit_maxsupply_on_bsc(contract) {
    const initMaxSupplyOnBsc = document.getElementById("init_maxsupply_on_bsc");
    const response = await contract.init_maxsupply_on_bsc();
    initMaxSupplyOnBsc.innerHTML += formatNumber(
        ethers.utils.formatEther(response)
    );
}

async function getTotalSupply(contract) {
    const totalSupply = document.getElementById("totalSupply");
    const response = await contract.totalSupply();
    totalSupply.innerHTML += formatNumber(ethers.utils.formatEther(response));
}

async function getMaxSupply(contract) {
    const html = document.getElementById("maxSupply");
    const response = await contract.maxSupply();
    html.innerHTML += formatNumber(ethers.utils.formatEther(response));
}

async function getPool(contract) {
    const html = document.getElementById("pool");
    const response = await contract.pool();
    html.innerHTML += response.toString();
}

async function getName(contract) {
    const html = document.getElementById("name");
    const response = await contract.name();
    html.innerHTML += response.toString();
}

async function getSymbol(contract) {
    const html = document.getElementById("symbol");
    const response = await contract.symbol();
    html.innerHTML += response.toString();
}

async function getDecimals(contract) {
    const html = document.getElementById("decimals");
    const response = await contract.decimals();
    html.innerHTML += response.toString();
}

//
//
// Pool Contract
//
//
async function getPoolAddress(contract) {
    const poolAddress = document.getElementById("poolAddress");
    const response = await contract.address;
    poolAddress.innerHTML += response.toString();
}

async function getAcceptedToken1(contract) {
    const acceptedToken1 = document.getElementById("acceptedToken1");
    const acceptedToken = await contract.acceptedToken1();
    acceptedToken1.innerHTML += acceptedToken.toString();
}

async function getAcceptedToken2(contract) {
    const acceptedToken2 = document.getElementById("acceptedToken2");
    const acceptedToken = await contract.acceptedToken2();
    acceptedToken2.innerHTML += acceptedToken.toString();
}

async function getAcceptedToken3(contract) {
    const acceptedToken3 = document.getElementById("acceptedToken3");
    const acceptedToken = await contract.acceptedToken3();
    acceptedToken3.innerHTML += acceptedToken.toString();
}

async function getAmountDepositedAcceptedToken1(contract) {
    const acceptedToken1Contract = await getContract(
        USDCContractAddress,
        tokenABI
    );
    const decimals = await acceptedToken1Contract.decimals();
    const html = document.getElementById("amountDepositedAcceptedToken1");
    const response = await contract.amountDepositedacceptedToken1();
    html.innerHTML += formatNumber(
        ethers.utils.formatUnits(response, decimals)
    );
}

async function getAmountDepositedAcceptedToken2(contract) {
    const acceptedToken1Contract = await getContract(
        USDTContractAddress,
        tokenABI
    );
    const decimals = await acceptedToken1Contract.decimals();
    const html = document.getElementById("amountDepositedAcceptedToken2");
    const response = await contract.amountDepositedacceptedToken2();
    html.innerHTML += formatNumber(
        ethers.utils.formatUnits(response, decimals)
    );
}

async function getAmountDepositedAcceptedToken3(contract) {
    const acceptedToken1Contract = await getContract(
        BUSDContractAddress,
        tokenABI
    );
    const decimals = await acceptedToken1Contract.decimals();
    const html = document.getElementById("amountDepositedAcceptedToken3");
    const response = await contract.amountDepositedacceptedToken3();
    html.innerHTML += formatNumber(
        ethers.utils.formatUnits(response, decimals)
    );
}

async function getAmountWithdrawnacceptedToken1(contract) {
    const html = document.getElementById("amountWithdrawnacceptedToken1");
    const response = await contract.amountWithdrawnacceptedToken1();
    html.innerHTML += response.toString();
}

async function getAmountWithdrawnacceptedToken2(contract) {
    const html = document.getElementById("amountWithdrawnacceptedToken2");
    const response = await contract.amountWithdrawnacceptedToken2();
    html.innerHTML += response.toString();
}

async function getAmountWithdrawnacceptedToken3(contract) {
    const html = document.getElementById("amountWithdrawnacceptedToken3");
    const response = await contract.amountWithdrawnacceptedToken3();
    html.innerHTML += response.toString();
}

async function getTuinHeld(contract) {
    const html = document.getElementById("tuinHeld");
    const response = await contract.tuinHeld(tokenContractAddress);
    html.innerHTML += formatNumber(ethers.utils.formatEther(response));
}

async function getExchangeRateTuin(contract) {
    const exchangeRate = document.getElementById("exchangeRateTuin");
    const response = await contract.exchangeRateTuin();
    exchangeRate.innerHTML += formatNumber(
        ethers.utils.formatUnits(response, 0)
    );
}

async function getExchangeRateUsd(contract) {
    const exchangeRate = document.getElementById("exchangeRateUsd");
    const response = await contract.exchangeRateUsd();
    exchangeRate.innerHTML += formatNumber(
        ethers.utils.formatUnits(response, 0)
    );
}

async function getDeploymentChainId(contract) {
    const html = document.getElementById("deploymentChainId");
    const response = await contract.deploymentChainId();
    html.innerHTML += response.toString();
}

async function getPoolOwner(contract) {
    const html = document.getElementById("poolOwner");
    const response = await contract.owner();
    html.innerHTML += response.toString();
}

async function getYieldToken(contract) {
    const html = document.getElementById("yieldToken");
    const response = await contract.yieldToken();
    html.innerHTML += response.toString();
}

async function getIsApproved(contract) {
    const html = document.getElementById("isApproved");
    const response = await contract.isApproved();
    html.innerHTML += response.toString();
}

async function getIsPaused(contract) {
    const html = document.getElementById("isPaused");
    const response = await contract.isPaused();
    html.innerHTML += response.toString();
}

//
//
// Wallet Contract
//
//
async function getWalletOwner(contract) {
    const html = document.getElementById("walletOwner");
    const response = await contract.owner();
    html.innerHTML += response.toString();
}

async function getWalletAddress(contract) {
    const html = document.getElementById("walletAddress");
    const response = await contract.address;
    html.innerHTML += response.toString();
}

// const poolOwnerInput = document.getElementById("poolOwnerInput");
// const poolOwnerSubmitButton = document.getElementById(
//     "setPoolOwnerSubmitButton"
// );
// poolOwnerSubmitButton.onclick = setPoolOwner;

// async function setPoolOwner() {
//     if (typeof window.ethereum !== "undefined") {
//         try {
//             await window.ethereum.request({ method: "eth_requestAccounts" });
//             const walletContract = await walletTTContract();
//             const setTUINPoolOwner = await walletContract.setTUINPoolOwner(
//                 poolContractAddress,
//                 poolOwnerInput.value,
//             );
//             await setTUINPoolOwner.wait();
//         } catch (error) {
//             console.log(error);
//         }
//     }
// }

// const tokenOwnerInput = document.getElementById("tokenOwnerInput");
// const tokenOwnerSubmitButton = document.getElementById(
//     "setTokenOwnerSubmitButton"
// );
// tokenOwnerSubmitButton.onclick = setTokenOwner;

// async function setTokenOwner() {
//     if (typeof window.ethereum !== undefined) {
//         try {
//             await window.ethereum.request({ method: "eth_requestAccounts" });
//             const tokenContract = await tokenTTContract();
//             const tokenSetOwner = await tokenContract.setOwner(
//                 tokenOwnerInput.value
//             );
//             await tokenSetOwner.wait();
//         } catch (error) {
//             console.log(error);
//         }
//     }
// }

//
//
// Set Exchange Rate TUIN
//
//
const exchangeRateTuinInput = document.getElementById("exchangeRateTuinInput");
const exchangeRateTuinSubmitButton = document.getElementById(
    "setExchangeRateTuinSubmitButton"
);
exchangeRateTuinSubmitButton.onclick = setExchangeRateTuin;
async function setExchangeRateTuin() {
    if (typeof window.ethereum !== "undefined") {
        try {
            await window.ethereum.request({ method: "eth_requestAccounts" });
            const poolContract = await getContract(
                poolContractAddress,
                poolABI
            );

            const value = ethers.utils.parseUnits(
                exchangeRateTuinInput.value.toString(),
                0
            );
            const response = await poolContract.setExchangeRateTuin(value);
            await response.wait();
            window.location.reload();
        } catch (error) {
            console.log(error);
        }
    }
}

//
//
// Set Exchange Rate USD
//
//
const exchangeRateUsdInput = document.getElementById("exchangeRateUsdInput");
const exchangeRateUsdSubmitButton = document.getElementById(
    "setExchangeRateUsdSubmitButton"
);
exchangeRateUsdSubmitButton.onclick = setExchangeRateUsd;
async function setExchangeRateUsd() {
    if (typeof window.ethereum !== "undefined") {
        try {
            await window.ethereum.request({ method: "eth_requestAccounts" });
            const poolContract = await getContract(
                poolContractAddress,
                poolABI
            );
            const value = ethers.utils.parseEther(
                exchangeRateUsdInput.value.toString()
            );
            const response = await poolContract.setExchangeRateUsd(value);
            await response.wait();
            window.location.reload();
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
            const poolContract = await getContract(
                poolContractAddress,
                poolABI
            );
            const value = acceptedToken1Input.value;
            const response = await poolContract.setAcceptedToken1(value);
            await response.wait();
            window.location.reload();
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
            const poolContract = await getContract(
                poolContractAddress,
                poolABI
            );
            const value = acceptedToken2Input.value;
            const response = await poolContract.setAcceptedToken2(value);
            await response.wait();
            window.location.reload();
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
            const poolContract = await getContract(
                poolContractAddress,
                poolABI
            );
            const value = acceptedToken3Input.value;
            const response = await poolContract.setAcceptedToken3(value);
            await response.wait();
            window.location.reload();
        } catch (error) {
            console.log(error);
        }
    }
}
