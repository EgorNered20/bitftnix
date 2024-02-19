<?php
// получаем значение параметра "pair"
$pair = $_GET['pair'];

// проверяем, что путь содержит "trade"
if (strpos($_SERVER['REQUEST_URI'], '/trade/') !== false) {
    // выполните здесь нужные действия с $pair

    // выводим результат в формате JSON
    header('Content-Type: application/json');
    echo '{"success":true,"data":{"title":"Trade","balances":[],"orders":[],"allow_symbols":["BTC_USDT","BTC_BUSD","BTC_BTC","BTC_ETH","ETH_USDT","ETH_BUSD","ETH_BTC","ETH_ETH","LTC_USDT","LTC_BUSD","LTC_BTC","LTC_ETH","BCH_USDT","BCH_BUSD","BCH_BTC","BCH_ETH","USDC_USDT","USDC_BUSD","USDC_BTC","USDC_ETH","BAT_USDT","BAT_BUSD","BAT_BTC","BAT_ETH","ETC_USDT","ETC_BUSD","ETC_BTC","ETC_ETH","ATOM_USDT","ATOM_BUSD","ATOM_BTC","ATOM_ETH","ZEC_USDT","ZEC_BUSD","ZEC_BTC","ZEC_ETH","LINK_USDT","LINK_BUSD","LINK_BTC","LINK_ETH","USDT_USDT","USDT_BUSD","USDT_BTC","USDT_ETH","BNB_USDT","BNB_BUSD","BNB_BTC","BNB_ETH","XRP_USDT","XRP_BUSD","XRP_BTC","XRP_ETH","EOS_USDT","EOS_BUSD","EOS_BTC","EOS_ETH","ADA_USDT","ADA_BUSD","ADA_BTC","ADA_ETH","NEO_USDT","NEO_BUSD","NEO_BTC","NEO_ETH","TRX_USDT","TRX_BUSD","TRX_BTC","TRX_ETH","XLM_USDT","XLM_BUSD","XLM_BTC","XLM_ETH","ALGO_USDT","ALGO_BUSD","ALGO_BTC","ALGO_ETH","ONT_USDT","ONT_BUSD","ONT_BTC","ONT_ETH","FTM_USDT","FTM_BUSD","FTM_BTC","FTM_ETH","ONE_USDT","ONE_BUSD","ONE_BTC","ONE_ETH","DOGE_USDT","DOGE_BUSD","DOGE_BTC","DOGE_ETH","BUSD_USDT","BUSD_BUSD","BUSD_BTC","BUSD_ETH","MATIC_USDT","MATIC_BUSD","MATIC_BTC","MATIC_ETH","SOL_USDT","SOL_BUSD","SOL_BTC","SOL_ETH","DOT_USDT","DOT_BUSD","DOT_BTC","DOT_ETH","AVAX_USDT","AVAX_BUSD","AVAX_BTC","AVAX_ETH"],"trade_tokens":{"BTC":{"name":"Bitcoin","fee":0.0005},"ETH":{"name":"Ethereum","fee":0.006},"LTC":{"name":"Litecoin","fee":0.12},"BCH":{"name":"Bitcoin Cash","fee":0.035},"USDC":{"name":"USD Coin","fee":25},"BAT":{"name":"Basic Attention Token","fee":27},"ETC":{"name":"Ethereum Classic","fee":0.361},"ATOM":{"name":"Cosmos","fee":1.032},"ZEC":{"name":"Zcash","fee":0.154},"LINK":{"name":"Chainlink","fee":0.825},"USDT":{"name":"Tether","fee":25},"BNB":{"name":"Binance Coin","fee":0.05},"XRP":{"name":"Ripple","fee":19.953},"EOS":{"name":"EOS","fee":4.42},"ADA":{"name":"Cardano","fee":8.632},"NEO":{"name":"NEO","fee":0.415},"TRX":{"name":"TRON","fee":245.33},"XLM":{"name":"Stellar Lumens","fee":66.08},"ALGO":{"name":"Algorand","fee":20.763},"ONT":{"name":"Ontology","fee":19.975},"FTM":{"name":"Fantom","fee":22.5},"ONE":{"name":"Harmony","fee":200},"DOGE":{"name":"Dogecoin","fee":83.15},"BUSD":{"name":"BUSD","fee":25},"MATIC":{"name":"Polygon","fee":10.28},"SOL":{"name":"Solana","fee":0.4415},"DOT":{"name":"Polkadot","fee":1.81},"AVAX":{"name":"Avalanche","fee":0.628108}},"quote_tokens":["USDT","BUSD","BTC","ETH"],"symbols":"BTC_USDT","rate_changes":[]}}';
}
?>
