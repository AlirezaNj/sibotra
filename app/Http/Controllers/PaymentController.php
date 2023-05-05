<?php

namespace App\Http\Controllers;

use IEXBase\TronAPI\Exception\TronException;
use IEXBase\TronAPI\Tron;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * @throws \IEXBase\TronAPI\Exception\TronException
     */
    public function createPayment()
    {
        $fullNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
        $solidityNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
        $eventServer = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
        $privateKey  = env('TRON_PRIVATE_KEY');

        try {
            $tron = new \IEXBase\TronAPI\Tron($fullNode, $solidityNode, $eventServer, privateKey: $privateKey);
        } catch (\IEXBase\TronAPI\Exception\TronException $e) {
            exit($e->getMessage());
        }
        /*$tron->setAddress('..');
        $tron->getBalance(null, true);*/
        $account = $tron->createAccount();
//        dd($account->getAddress());
//        dd($tron->getAccount());
        dd($tron->send($tron->generateAddress()->getAddress(), 1.5, $account->getAddress()));
        var_dump($tron->getLatestBlocks(2));

        var_dump($tron->changeAccountName('address', 'NewName'));

        $tron->contract('Contract Address');

        /*$tron = new Tron(
            $fullNode = env('TRON_FULL_NODE'),
            $solidityNodeUrl = env('TRON_SOLIDITY_NODE'),
            $eventServerUrl = env('TRON_EVENT_SERVER')
        );*/

        /*$tron->setPrivateKey(env('TRON_PRIVATE_KEY'));
        $tron->setAddress($tron->getAddressFromPrivateKey());*/

        /*$toAddress = 'TRON_address_of_the_recipient';
        $amount = 100; // payment amount in TRX

        $result = $tron->sendTransaction($toAddress, $amount);
        $txId = $result['txid'];

        $paymentUrl = 'https://tronscan.io/#/transaction/' . $txId;

        return redirect($paymentUrl);*/
    }

    /**
     * @throws TronException
     */
    public function paymentSuccess(Request $request)
    {
        $txId = $request->input('txid');

        $tron = new Tron($fullNodeUrl = env('TRON_FULL_NODE'), $solidityNodeUrl = env('TRON_SOLIDITY_NODE'), $eventServerUrl = env('TRON_EVENT_SERVER'));
        $result = $tron->getTransaction($txId);

        // handle payment confirmation
    }
}
