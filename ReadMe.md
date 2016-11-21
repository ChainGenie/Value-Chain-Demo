<B>Value Chain Demo:</B><br/>
Link to working demo: <a href="http://chaingenie.com">http://valuechain.chaingenie.com</a>
<br/><br/>

<b>Information about this project:</b>
-	This demo was developed as part of WCF SBL® lab.
-	Application is built on Ethereum blockchain.
-	Application is configured to run on private Ethereum test node.
-	All transaction values are in Ether.  Other currencies coming soon.
-	DAPP uses solidity as its programming language for smart contracts.
-	All interactions with the blockchain uses <a href="http://chaingenie.com">ChainGenie®</a> sandbox framework.
-	ChainGenie® catalog used for this demo is “<a href="http://chaingenie.com/demo.html">Value Chain APIs</a>”.
-	Email magic@chaingenie.com for your sandbox ApiKey.
-	DAPP code for the solution is available on <a href="https://github.com/ChainGenie/Value-Chain-Demo">GitHub</a>.
<br/><br/>

<b>Workflow:</b>
- Seller initiates sale – CreateTradeContract
   	- Escrow from seller added for value of contract
   	- End transaction state = created
-	Buyer confirms interest in buying – ConfirmPurchase
  	- Escrow from buyer added to value of contract
  	- Invoice document is created with all details from invoice template
  	- Invoice is added IPFS and blockchain
  	- End transaction state = locked
-	Seller can cancel the market trade – ConfirmAbort
  	- Escrow from seller is returned back to the seller
  	- End transaction state = inactive
-	OPTION 1: Seller can refund - ConfirmRefund
  	- Escrow distributed back to both seller and vendor
  	- End transaction state = inactive
-	OPTION 2 : Buyer can confirm receipt of item – ConfirmReceived
  	- Value fully sent to seller from escrow
  	- End transaction state = inactive

<br/><br/>
<b>License and Software Versions: </b><a href="https://github.com/ChainGenie/Value-Chain-Demo/blob/master/LICENSE">License</a>
<BR/>
Should you have installed the open source version of the Software that version of the Software is subject to this EULA as well as the terms of the GNU Affero General Public License version 3 or later. 
<br/>
Please note, however, that as an end user of the Software the provisions of this EULA shall prevail. Should You wish to change or distribute the Software the provisions of the GNU Affero General Public License shall take precedence.
