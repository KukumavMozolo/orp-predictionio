<?php

namespace Plista\Orp\PredictionIOMatrixFactorization;

use Guzzle\Http\Exception\BadResponseException;
use PredictionIO\PredictionIOClient;


/**
 * Class Model, this class handles some additional io operations
 * @package  Plista\Orp\PredictionIOMatrixFactorization
 */
class Model {
	/**
	 * @return PredictionIOClient
	 */
	public function getClient() {
		$client = PredictionIOClient::factory(array("appkey" => "frWH21Kk6IciyuPBXI6xc6wOfxqrLuvqGSXDMAC1dBClTow3bWLfC350c3Yhy1Qi"));
			return $client;
	}

	/**
	 * Plista user_id's can exceed the integer limit, unfortunately mahout's indexes are limited to integer, therefore we do this
	 * simple remapping
	 */
	public  function idMapping($id) {
		if (!isset($id)) {
			return 0;
		}
		return abs($id % 2147483647);
	}


}