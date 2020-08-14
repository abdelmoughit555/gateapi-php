# GateApi

APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 4.15.3
- Package version: 5.15.3
- Build package: org.openapitools.codegen.languages.PhpClientCodegen
For more information, please visit [https://www.gate.io/page/contacts](https://www.gate.io/page/contacts)

## Versioning

Trying our best to follow the [semantic versioning](https://semver.org/), while enjoying recent features
provided by programming language and libraries, from 4.15.2, one major versioning difference will be
introduced:

If extra code rewrite is required when you upgrade the SDK, such as:

- some outdated programming language version support is dropped
- API method signature has breaking changes.

**the MAJOR version will be incremented, but the MINOR and PATCH version are still following REST API's
instead of resetting to 0**, so that you can recognize it has some breaking changes, but still getting
the idea of from which REST API version the change is introduced.

For example, the previous REST API and SDK version are both 4.14.0. But if we decide to introduce
some breaking changes in SDK along with REST API 4.15.2 upgrade, then the version of next SDK release
will be 5.15.2(the MAJOR version is incremented to denote breaking changes, but the MINOR and PATCH
version are identical to REST API's instead of resetting them to 0)

If MAJOR version is incremented, make sure you read the release note on
[Releases](https://github.com/gateio/gateapi-php/releases)
page

## Requirements

PHP 7.1 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/gateio/gateapi-php.git"
        }
    ],
    "require": {
        "gateio/gateapi-php": "*@dev"
    }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/GateApi/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new GateApi\Api\DeliveryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$settle = 'usdt'; // string | Settle currency

try {
    $result = $apiInstance->listDeliveryContracts($settle);
    print_r($result);
} catch (GateApi\GateApiException $e) {
    echo "Gate API Exception: label: {$e->getLabel()}, message: {$e->getMessage()}" . PHP_EOL;
} catch (Exception $e) {
    echo 'Exception when calling DeliveryApi->listDeliveryContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.gateio.ws/api/v4*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DeliveryApi* | [**listDeliveryContracts**](docs/Api/DeliveryApi.md#listdeliverycontracts) | **GET** /delivery/{settle}/contracts | List all futures contracts
*DeliveryApi* | [**getDeliveryContract**](docs/Api/DeliveryApi.md#getdeliverycontract) | **GET** /delivery/{settle}/contracts/{contract} | Get a single contract
*DeliveryApi* | [**listDeliveryOrderBook**](docs/Api/DeliveryApi.md#listdeliveryorderbook) | **GET** /delivery/{settle}/order_book | Futures order book
*DeliveryApi* | [**listDeliveryTrades**](docs/Api/DeliveryApi.md#listdeliverytrades) | **GET** /delivery/{settle}/trades | Futures trading history
*DeliveryApi* | [**listDeliveryCandlesticks**](docs/Api/DeliveryApi.md#listdeliverycandlesticks) | **GET** /delivery/{settle}/candlesticks | Get futures candlesticks
*DeliveryApi* | [**listDeliveryTickers**](docs/Api/DeliveryApi.md#listdeliverytickers) | **GET** /delivery/{settle}/tickers | List futures tickers
*DeliveryApi* | [**listDeliveryInsuranceLedger**](docs/Api/DeliveryApi.md#listdeliveryinsuranceledger) | **GET** /delivery/{settle}/insurance | Futures insurance balance history
*DeliveryApi* | [**listDeliveryAccounts**](docs/Api/DeliveryApi.md#listdeliveryaccounts) | **GET** /delivery/{settle}/accounts | Query futures account
*DeliveryApi* | [**listDeliveryAccountBook**](docs/Api/DeliveryApi.md#listdeliveryaccountbook) | **GET** /delivery/{settle}/account_book | Query account book
*DeliveryApi* | [**listDeliveryPositions**](docs/Api/DeliveryApi.md#listdeliverypositions) | **GET** /delivery/{settle}/positions | List all positions of a user
*DeliveryApi* | [**getDeliveryPosition**](docs/Api/DeliveryApi.md#getdeliveryposition) | **GET** /delivery/{settle}/positions/{contract} | Get single position
*DeliveryApi* | [**updateDeliveryPositionMargin**](docs/Api/DeliveryApi.md#updatedeliverypositionmargin) | **POST** /delivery/{settle}/positions/{contract}/margin | Update position margin
*DeliveryApi* | [**updateDeliveryPositionLeverage**](docs/Api/DeliveryApi.md#updatedeliverypositionleverage) | **POST** /delivery/{settle}/positions/{contract}/leverage | Update position leverage
*DeliveryApi* | [**updateDeliveryPositionRiskLimit**](docs/Api/DeliveryApi.md#updatedeliverypositionrisklimit) | **POST** /delivery/{settle}/positions/{contract}/risk_limit | Update position risk limit
*DeliveryApi* | [**listDeliveryOrders**](docs/Api/DeliveryApi.md#listdeliveryorders) | **GET** /delivery/{settle}/orders | List futures orders
*DeliveryApi* | [**createDeliveryOrder**](docs/Api/DeliveryApi.md#createdeliveryorder) | **POST** /delivery/{settle}/orders | Create a futures order
*DeliveryApi* | [**cancelDeliveryOrders**](docs/Api/DeliveryApi.md#canceldeliveryorders) | **DELETE** /delivery/{settle}/orders | Cancel all &#x60;open&#x60; orders matched
*DeliveryApi* | [**getDeliveryOrder**](docs/Api/DeliveryApi.md#getdeliveryorder) | **GET** /delivery/{settle}/orders/{order_id} | Get a single order
*DeliveryApi* | [**cancelDeliveryOrder**](docs/Api/DeliveryApi.md#canceldeliveryorder) | **DELETE** /delivery/{settle}/orders/{order_id} | Cancel a single order
*DeliveryApi* | [**getMyDeliveryTrades**](docs/Api/DeliveryApi.md#getmydeliverytrades) | **GET** /delivery/{settle}/my_trades | List personal trading history
*DeliveryApi* | [**listDeliveryPositionClose**](docs/Api/DeliveryApi.md#listdeliverypositionclose) | **GET** /delivery/{settle}/position_close | List position close history
*DeliveryApi* | [**listDeliveryLiquidates**](docs/Api/DeliveryApi.md#listdeliveryliquidates) | **GET** /delivery/{settle}/liquidates | List liquidation history
*DeliveryApi* | [**listDeliverySettlements**](docs/Api/DeliveryApi.md#listdeliverysettlements) | **GET** /delivery/{settle}/settlements | List settlement history
*DeliveryApi* | [**listPriceTriggeredDeliveryOrders**](docs/Api/DeliveryApi.md#listpricetriggereddeliveryorders) | **GET** /delivery/{settle}/price_orders | List all auto orders
*DeliveryApi* | [**createPriceTriggeredDeliveryOrder**](docs/Api/DeliveryApi.md#createpricetriggereddeliveryorder) | **POST** /delivery/{settle}/price_orders | Create a price-triggered order
*DeliveryApi* | [**cancelPriceTriggeredDeliveryOrderList**](docs/Api/DeliveryApi.md#cancelpricetriggereddeliveryorderlist) | **DELETE** /delivery/{settle}/price_orders | Cancel all open orders
*DeliveryApi* | [**getPriceTriggeredDeliveryOrder**](docs/Api/DeliveryApi.md#getpricetriggereddeliveryorder) | **GET** /delivery/{settle}/price_orders/{order_id} | Get a single order
*DeliveryApi* | [**cancelPriceTriggeredDeliveryOrder**](docs/Api/DeliveryApi.md#cancelpricetriggereddeliveryorder) | **DELETE** /delivery/{settle}/price_orders/{order_id} | Cancel a single order
*FuturesApi* | [**listFuturesContracts**](docs/Api/FuturesApi.md#listfuturescontracts) | **GET** /futures/{settle}/contracts | List all futures contracts
*FuturesApi* | [**getFuturesContract**](docs/Api/FuturesApi.md#getfuturescontract) | **GET** /futures/{settle}/contracts/{contract} | Get a single contract
*FuturesApi* | [**listFuturesOrderBook**](docs/Api/FuturesApi.md#listfuturesorderbook) | **GET** /futures/{settle}/order_book | Futures order book
*FuturesApi* | [**listFuturesTrades**](docs/Api/FuturesApi.md#listfuturestrades) | **GET** /futures/{settle}/trades | Futures trading history
*FuturesApi* | [**listFuturesCandlesticks**](docs/Api/FuturesApi.md#listfuturescandlesticks) | **GET** /futures/{settle}/candlesticks | Get futures candlesticks
*FuturesApi* | [**listFuturesTickers**](docs/Api/FuturesApi.md#listfuturestickers) | **GET** /futures/{settle}/tickers | List futures tickers
*FuturesApi* | [**listFuturesFundingRateHistory**](docs/Api/FuturesApi.md#listfuturesfundingratehistory) | **GET** /futures/{settle}/funding_rate | Funding rate history
*FuturesApi* | [**listFuturesInsuranceLedger**](docs/Api/FuturesApi.md#listfuturesinsuranceledger) | **GET** /futures/{settle}/insurance | Futures insurance balance history
*FuturesApi* | [**listFuturesAccounts**](docs/Api/FuturesApi.md#listfuturesaccounts) | **GET** /futures/{settle}/accounts | Query futures account
*FuturesApi* | [**listFuturesAccountBook**](docs/Api/FuturesApi.md#listfuturesaccountbook) | **GET** /futures/{settle}/account_book | Query account book
*FuturesApi* | [**listPositions**](docs/Api/FuturesApi.md#listpositions) | **GET** /futures/{settle}/positions | List all positions of a user
*FuturesApi* | [**getPosition**](docs/Api/FuturesApi.md#getposition) | **GET** /futures/{settle}/positions/{contract} | Get single position
*FuturesApi* | [**updatePositionMargin**](docs/Api/FuturesApi.md#updatepositionmargin) | **POST** /futures/{settle}/positions/{contract}/margin | Update position margin
*FuturesApi* | [**updatePositionLeverage**](docs/Api/FuturesApi.md#updatepositionleverage) | **POST** /futures/{settle}/positions/{contract}/leverage | Update position leverage
*FuturesApi* | [**updatePositionRiskLimit**](docs/Api/FuturesApi.md#updatepositionrisklimit) | **POST** /futures/{settle}/positions/{contract}/risk_limit | Update position risk limit
*FuturesApi* | [**listFuturesOrders**](docs/Api/FuturesApi.md#listfuturesorders) | **GET** /futures/{settle}/orders | List futures orders
*FuturesApi* | [**createFuturesOrder**](docs/Api/FuturesApi.md#createfuturesorder) | **POST** /futures/{settle}/orders | Create a futures order
*FuturesApi* | [**cancelFuturesOrders**](docs/Api/FuturesApi.md#cancelfuturesorders) | **DELETE** /futures/{settle}/orders | Cancel all &#x60;open&#x60; orders matched
*FuturesApi* | [**getFuturesOrder**](docs/Api/FuturesApi.md#getfuturesorder) | **GET** /futures/{settle}/orders/{order_id} | Get a single order
*FuturesApi* | [**cancelFuturesOrder**](docs/Api/FuturesApi.md#cancelfuturesorder) | **DELETE** /futures/{settle}/orders/{order_id} | Cancel a single order
*FuturesApi* | [**getMyTrades**](docs/Api/FuturesApi.md#getmytrades) | **GET** /futures/{settle}/my_trades | List personal trading history
*FuturesApi* | [**listPositionClose**](docs/Api/FuturesApi.md#listpositionclose) | **GET** /futures/{settle}/position_close | List position close history
*FuturesApi* | [**listLiquidates**](docs/Api/FuturesApi.md#listliquidates) | **GET** /futures/{settle}/liquidates | List liquidation history
*FuturesApi* | [**listPriceTriggeredOrders**](docs/Api/FuturesApi.md#listpricetriggeredorders) | **GET** /futures/{settle}/price_orders | List all auto orders
*FuturesApi* | [**createPriceTriggeredOrder**](docs/Api/FuturesApi.md#createpricetriggeredorder) | **POST** /futures/{settle}/price_orders | Create a price-triggered order
*FuturesApi* | [**cancelPriceTriggeredOrderList**](docs/Api/FuturesApi.md#cancelpricetriggeredorderlist) | **DELETE** /futures/{settle}/price_orders | Cancel all open orders
*FuturesApi* | [**getPriceTriggeredOrder**](docs/Api/FuturesApi.md#getpricetriggeredorder) | **GET** /futures/{settle}/price_orders/{order_id} | Get a single order
*FuturesApi* | [**cancelPriceTriggeredOrder**](docs/Api/FuturesApi.md#cancelpricetriggeredorder) | **DELETE** /futures/{settle}/price_orders/{order_id} | Cancel a single order
*MarginApi* | [**listMarginCurrencyPairs**](docs/Api/MarginApi.md#listmargincurrencypairs) | **GET** /margin/currency_pairs | List all supported currency pairs supported in margin trading
*MarginApi* | [**listFundingBook**](docs/Api/MarginApi.md#listfundingbook) | **GET** /margin/funding_book | Order book of lending loans
*MarginApi* | [**listMarginAccounts**](docs/Api/MarginApi.md#listmarginaccounts) | **GET** /margin/accounts | Margin account list
*MarginApi* | [**listMarginAccountBook**](docs/Api/MarginApi.md#listmarginaccountbook) | **GET** /margin/account_book | List margin account balance change history
*MarginApi* | [**listFundingAccounts**](docs/Api/MarginApi.md#listfundingaccounts) | **GET** /margin/funding_accounts | Funding account list
*MarginApi* | [**listLoans**](docs/Api/MarginApi.md#listloans) | **GET** /margin/loans | List all loans
*MarginApi* | [**createLoan**](docs/Api/MarginApi.md#createloan) | **POST** /margin/loans | Lend or borrow
*MarginApi* | [**mergeLoans**](docs/Api/MarginApi.md#mergeloans) | **POST** /margin/merged_loans | Merge multiple lending loans
*MarginApi* | [**getLoan**](docs/Api/MarginApi.md#getloan) | **GET** /margin/loans/{loan_id} | Retrieve one single loan detail
*MarginApi* | [**cancelLoan**](docs/Api/MarginApi.md#cancelloan) | **DELETE** /margin/loans/{loan_id} | Cancel lending loan
*MarginApi* | [**updateLoan**](docs/Api/MarginApi.md#updateloan) | **PATCH** /margin/loans/{loan_id} | Modify a loan
*MarginApi* | [**listLoanRepayments**](docs/Api/MarginApi.md#listloanrepayments) | **GET** /margin/loans/{loan_id}/repayment | List loan repayment records
*MarginApi* | [**repayLoan**](docs/Api/MarginApi.md#repayloan) | **POST** /margin/loans/{loan_id}/repayment | Repay a loan
*MarginApi* | [**listLoanRecords**](docs/Api/MarginApi.md#listloanrecords) | **GET** /margin/loan_records | List repayment records of specified loan
*MarginApi* | [**getLoanRecord**](docs/Api/MarginApi.md#getloanrecord) | **GET** /margin/loan_records/{loan_record_id} | Get one single loan record
*MarginApi* | [**updateLoanRecord**](docs/Api/MarginApi.md#updateloanrecord) | **PATCH** /margin/loan_records/{loan_record_id} | Modify a loan record
*SpotApi* | [**listCurrencyPairs**](docs/Api/SpotApi.md#listcurrencypairs) | **GET** /spot/currency_pairs | List all currency pairs supported
*SpotApi* | [**getCurrencyPair**](docs/Api/SpotApi.md#getcurrencypair) | **GET** /spot/currency_pairs/{currency_pair} | Get detail of one single order
*SpotApi* | [**listTickers**](docs/Api/SpotApi.md#listtickers) | **GET** /spot/tickers | Retrieve ticker information
*SpotApi* | [**listOrderBook**](docs/Api/SpotApi.md#listorderbook) | **GET** /spot/order_book | Retrieve order book
*SpotApi* | [**listTrades**](docs/Api/SpotApi.md#listtrades) | **GET** /spot/trades | Retrieve market trades
*SpotApi* | [**listCandlesticks**](docs/Api/SpotApi.md#listcandlesticks) | **GET** /spot/candlesticks | Market candlesticks
*SpotApi* | [**getFee**](docs/Api/SpotApi.md#getfee) | **GET** /spot/fee | Query user trading fee rates
*SpotApi* | [**listSpotAccounts**](docs/Api/SpotApi.md#listspotaccounts) | **GET** /spot/accounts | List spot accounts
*SpotApi* | [**createBatchOrders**](docs/Api/SpotApi.md#createbatchorders) | **POST** /spot/batch_orders | Create a batch of orders
*SpotApi* | [**listAllOpenOrders**](docs/Api/SpotApi.md#listallopenorders) | **GET** /spot/open_orders | List all open orders
*SpotApi* | [**listOrders**](docs/Api/SpotApi.md#listorders) | **GET** /spot/orders | List orders
*SpotApi* | [**createOrder**](docs/Api/SpotApi.md#createorder) | **POST** /spot/orders | Create an order
*SpotApi* | [**cancelOrders**](docs/Api/SpotApi.md#cancelorders) | **DELETE** /spot/orders | Cancel all &#x60;open&#x60; orders in specified currency pair
*SpotApi* | [**cancelBatchOrders**](docs/Api/SpotApi.md#cancelbatchorders) | **POST** /spot/cancel_batch_orders | Cancel a batch of orders with an ID list
*SpotApi* | [**getOrder**](docs/Api/SpotApi.md#getorder) | **GET** /spot/orders/{order_id} | Get a single order
*SpotApi* | [**cancelOrder**](docs/Api/SpotApi.md#cancelorder) | **DELETE** /spot/orders/{order_id} | Cancel a single order
*SpotApi* | [**listMyTrades**](docs/Api/SpotApi.md#listmytrades) | **GET** /spot/my_trades | List personal trading history
*WalletApi* | [**getDepositAddress**](docs/Api/WalletApi.md#getdepositaddress) | **GET** /wallet/deposit_address | Generate currency deposit address
*WalletApi* | [**listWithdrawals**](docs/Api/WalletApi.md#listwithdrawals) | **GET** /wallet/withdrawals | Retrieve withdrawal records
*WalletApi* | [**listDeposits**](docs/Api/WalletApi.md#listdeposits) | **GET** /wallet/deposits | Retrieve deposit records
*WalletApi* | [**transfer**](docs/Api/WalletApi.md#transfer) | **POST** /wallet/transfers | Transfer between trading accounts
*WalletApi* | [**listSubAccountTransfers**](docs/Api/WalletApi.md#listsubaccounttransfers) | **GET** /wallet/sub_account_transfers | Transfer records between main and sub accounts
*WalletApi* | [**transferWithSubAccount**](docs/Api/WalletApi.md#transferwithsubaccount) | **POST** /wallet/sub_account_transfers | Transfer between main and sub accounts
*WithdrawalApi* | [**withdraw**](docs/Api/WithdrawalApi.md#withdraw) | **POST** /withdrawals | Withdraw


## Documentation For Models

 - [BatchOrder](docs/Model/BatchOrder.md)
 - [CancelOrder](docs/Model/CancelOrder.md)
 - [CancelOrderResult](docs/Model/CancelOrderResult.md)
 - [Contract](docs/Model/Contract.md)
 - [CurrencyPair](docs/Model/CurrencyPair.md)
 - [DeliveryContract](docs/Model/DeliveryContract.md)
 - [DeliverySettlement](docs/Model/DeliverySettlement.md)
 - [DepositAddress](docs/Model/DepositAddress.md)
 - [FundingAccount](docs/Model/FundingAccount.md)
 - [FundingBookItem](docs/Model/FundingBookItem.md)
 - [FundingRateRecord](docs/Model/FundingRateRecord.md)
 - [FuturesAccount](docs/Model/FuturesAccount.md)
 - [FuturesAccountBook](docs/Model/FuturesAccountBook.md)
 - [FuturesCandlestick](docs/Model/FuturesCandlestick.md)
 - [FuturesInitialOrder](docs/Model/FuturesInitialOrder.md)
 - [FuturesLiquidate](docs/Model/FuturesLiquidate.md)
 - [FuturesOrder](docs/Model/FuturesOrder.md)
 - [FuturesOrderBook](docs/Model/FuturesOrderBook.md)
 - [FuturesOrderBookItem](docs/Model/FuturesOrderBookItem.md)
 - [FuturesPriceTrigger](docs/Model/FuturesPriceTrigger.md)
 - [FuturesPriceTriggeredOrder](docs/Model/FuturesPriceTriggeredOrder.md)
 - [FuturesTicker](docs/Model/FuturesTicker.md)
 - [FuturesTrade](docs/Model/FuturesTrade.md)
 - [InsuranceRecord](docs/Model/InsuranceRecord.md)
 - [LedgerRecord](docs/Model/LedgerRecord.md)
 - [Loan](docs/Model/Loan.md)
 - [LoanPatch](docs/Model/LoanPatch.md)
 - [LoanRecord](docs/Model/LoanRecord.md)
 - [MarginAccount](docs/Model/MarginAccount.md)
 - [MarginAccountBook](docs/Model/MarginAccountBook.md)
 - [MarginAccountCurrency](docs/Model/MarginAccountCurrency.md)
 - [MarginCurrencyPair](docs/Model/MarginCurrencyPair.md)
 - [MyFuturesTrade](docs/Model/MyFuturesTrade.md)
 - [OpenOrders](docs/Model/OpenOrders.md)
 - [Order](docs/Model/Order.md)
 - [OrderBook](docs/Model/OrderBook.md)
 - [Position](docs/Model/Position.md)
 - [PositionClose](docs/Model/PositionClose.md)
 - [PositionCloseOrder](docs/Model/PositionCloseOrder.md)
 - [RepayRequest](docs/Model/RepayRequest.md)
 - [Repayment](docs/Model/Repayment.md)
 - [SpotAccount](docs/Model/SpotAccount.md)
 - [SubAccountTransfer](docs/Model/SubAccountTransfer.md)
 - [Ticker](docs/Model/Ticker.md)
 - [Trade](docs/Model/Trade.md)
 - [TradeFee](docs/Model/TradeFee.md)
 - [Transfer](docs/Model/Transfer.md)
 - [TriggerOrderResponse](docs/Model/TriggerOrderResponse.md)


## Documentation For Authorization

Authentication schemes defined for the API:

## apiv4

- **Type**: Gate APIv4

https://www.gate.io/docs/apiv4/en/index.html#apiv4-signed-request-requirements

## Author

support@mail.gate.io

