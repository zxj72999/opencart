<?php
namespace Aws\EBS;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Elastic Block Store** service.
 * @method \Aws\Result getSnapshotBlock(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSnapshotBlockAsync(array $args = [])
 * @method \Aws\Result listChangedBlocks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listChangedBlocksAsync(array $args = [])
 * @method \Aws\Result listSnapshotBlocks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSnapshotBlocksAsync(array $args = [])
 */
class EBSClient extends AwsClient {}