<?php
namespace Aws\Sms;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS Server Migration Service** service.
 * @method \Aws\Result createApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppAsync(array $args = [])
 * @method \Aws\Result createReplicationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReplicationJobAsync(array $args = [])
 * @method \Aws\Result deleteApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppAsync(array $args = [])
 * @method \Aws\Result deleteAppLaunchConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppLaunchConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteAppReplicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAppReplicationConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteReplicationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteReplicationJobAsync(array $args = [])
 * @method \Aws\Result deleteServerCatalog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteServerCatalogAsync(array $args = [])
 * @method \Aws\Result disassociateConnector(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateConnectorAsync(array $args = [])
 * @method \Aws\Result generateChangeSet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateChangeSetAsync(array $args = [])
 * @method \Aws\Result generateTemplate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise generateTemplateAsync(array $args = [])
 * @method \Aws\Result getApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAppAsync(array $args = [])
 * @method \Aws\Result getAppLaunchConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAppLaunchConfigurationAsync(array $args = [])
 * @method \Aws\Result getAppReplicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAppReplicationConfigurationAsync(array $args = [])
 * @method \Aws\Result getConnectors(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConnectorsAsync(array $args = [])
 * @method \Aws\Result getReplicationJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReplicationJobsAsync(array $args = [])
 * @method \Aws\Result getReplicationRuns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getReplicationRunsAsync(array $args = [])
 * @method \Aws\Result getServers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServersAsync(array $args = [])
 * @method \Aws\Result importServerCatalog(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importServerCatalogAsync(array $args = [])
 * @method \Aws\Result launchApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise launchAppAsync(array $args = [])
 * @method \Aws\Result listApps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAppsAsync(array $args = [])
 * @method \Aws\Result putAppLaunchConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAppLaunchConfigurationAsync(array $args = [])
 * @method \Aws\Result putAppReplicationConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putAppReplicationConfigurationAsync(array $args = [])
 * @method \Aws\Result startAppReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startAppReplicationAsync(array $args = [])
 * @method \Aws\Result startOnDemandReplicationRun(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startOnDemandReplicationRunAsync(array $args = [])
 * @method \Aws\Result stopAppReplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopAppReplicationAsync(array $args = [])
 * @method \Aws\Result terminateApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateAppAsync(array $args = [])
 * @method \Aws\Result updateApp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAppAsync(array $args = [])
 * @method \Aws\Result updateReplicationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateReplicationJobAsync(array $args = [])
 */
class SmsClient extends AwsClient {}
