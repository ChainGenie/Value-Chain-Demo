<B>Value Chain Demo:</B><br/>
Link to working demo: <a href="http://chaingenie.com">http://valuechain.chaingenie.com</a><br/>
Link to GitHub pages: <a href="https://chaingenie.github.io/Value-Chain-Demo/">https://chaingenie.github.io/Value-Chain-Demo/</a>
<br/><br/>

<b>Information about this project:</b>
-	This demo was developed as part of WCF SBL™ lab.
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
- LIST: Seller initiates sale – CreateTradeContract
   	- Escrow from seller added for value of contract
   	- End transaction state = created
-	BID / BUY: Buyer confirms interest in buying – ConfirmPurchase
  	- Escrow from buyer added to value of contract
  	- Invoice document is created with all details from invoice template
  	- Invoice is added IPFS and blockchain
  	- End transaction state = locked
-	DELIVERY CONFIRMATION: Buyer can confirm receipt of item – ConfirmReceived
  	- Value fully sent to seller from escrow
  	- End transaction state = inactive
    - TRANSACTION COMPLETE
-	Addon: Seller option 1
    - Seller can cancel the market trade after listing but before bid/buy – ConfirmAbort
  	- Escrow from seller is returned back to the seller
  	- End transaction state = inactive
-	Addon: Seller option 2
    - Seller can cancel the market trade after bid/buy by refunding the seller – ConfirmRefund
  	- Escrow from buyer is returned back to the buyer
    - Escrow from seller is returned back to the seller (penalties can be imposed)
  	- End transaction state = inactive

<br/>

The below represents the components that can make up your workflow and a proposal to put them together. <br>
<hr/>
<br/><img src="https://github.com/ChainGenie/Value-Chain-Demo/blob/master/images/components.JPG" width="400" /><br/>
<br/><img src="https://github.com/ChainGenie/Value-Chain-Demo/blob/master/images/workflow.JPG" width="400" />
<hr/>

<br/>

<b>Project visionaries:</b><br>
- Mark Painter, CFA, FRM, MBA
  - <a href="https://www.linkedin.com/in/william-mark-painter-2366b462">LinkedIn profile</a>
  - Organization: consensus-evolution
- Charles Meier, MBA
  - <a href="https://www.linkedin.com/in/charles-meier-20836593">LinkedIn profile</a>
<br/>

<b>Project mentor / guide:</b><br>
- Usha Krishnan
  - <a href="https://www.linkedin.com/in/upriya">LinkedIn profile</a>
  - Organization: <a href="http://chaingenie.com">ChainGenie®</a>
<br/>

<b>License and Software Versions: </b><a href="https://github.com/ChainGenie/Value-Chain-Demo/blob/master/LICENSE">License</a>
<BR/>
Should you have installed the open source version of the Software that version of the Software is subject to this EULA as well as the terms of the GNU Affero General Public License version 3 or later. 
<br/>
Please note, however, that as an end user of the Software the provisions of this EULA shall prevail. Should You wish to change or distribute the Software the provisions of the GNU Affero General Public License shall take precedence.
