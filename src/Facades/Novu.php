<?php

namespace Novu\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Novu\SDK\Resources\Topic createTopic(array $data)
 * @method static \Novu\SDK\Resources\Topic getTopics()
 * @method static void addSubscribersToTopic(string $topicKey, array $data)
 * @method static void removeSubscribersFromTopic($topicKey, array $data)
 * @method static array renameTopic(string $topicKey, string $topicName)
 * @method static \Novu\SDK\Resources\Subscriber createSubscriber(array $data, bool $wait = true)
 * @method static array bulkCreateSubscribers(array $data)
 * @method static \Novu\SDK\Resources\Subscriber updateSubscriber(string $subscriberId, array $data)
 * @method static \Novu\SDK\Resources\Subscriber deleteSubscriber(string $subscriberId)
 * @method static \Novu\SDK\Resources\Subscriber updateSubscriberCredentials(string $subscriberId, array $data)
 * @method static \Novu\SDK\Resources\Subscriber getSubscriberList()
 * @method static \Novu\SDK\Resources\Subscriber getSubscriber(string $subscriberId)
 * @method static \Novu\SDK\Resources\Subscriber getSubscriberPreferences(string $subscriberId)
 * @method static \Novu\SDK\Resources\Subscriber updateSubscriberPreference(string $subscriberId, string $templateId, array $data)
 * @method static \Novu\SDK\Resources\Subscriber updateSubscriberOnlineStatus(string $subscriberId, bool $isOnlineStatus)
 * @method static \Novu\SDK\Resources\Subscriber getNotificationFeedForSubscriber(string $subscriberId)
 * @method static \Novu\SDK\Resources\Subscriber getUnseenNotificationCountForSubscriber(string $subscriberId)
 * @method static \Novu\SDK\Resources\Subscriber markSubscriberFeedMessageAsSeen(string $subscriberId, string $messageId, array $data, bool $wait = true)
 * @method static \Novu\SDK\Resources\Subscriber markSubscriberMessageActionAsSeen(string $subscriberId, string $messageId, string $type, array $data, bool $wait = true)
 * @method static \Novu\SDK\Resources\Activity getActivityFeed()
 * @method static \Novu\SDK\Resources\Activity getActivityStatistics()
 * @method static \Novu\SDK\Resources\Activity getActivityGraphStatistics()
 * @method static \Novu\SDK\Resources\InboundParse validateMXRecordForInboundParse()
 * @method static \Novu\SDK\Resources\Notification getNotification(string $notificationId)
 * @method static \Novu\SDK\Resources\NotificationStats getNotifications(array $queryParams = [])
 * @method static \Novu\SDK\Resources\NotificationStats getNotificationStats()
 * @method static \Novu\SDK\Resources\NotificationGraphStats getNotificationGraphStats(array $queryParams = [])
 * @method static \Novu\SDK\Resources\Change getChanges()
 * @method static \Novu\SDK\Resources\Change getChangesCount()
 * @method static \Novu\SDK\Resources\Change applyBulkChanges(array $data)
 * @method static \Novu\SDK\Resources\Change applyChange(string $changeId, array $data)
 * @method static \Novu\SDK\Resources\Environment getCurrentEnvironment()
 * @method static \Novu\SDK\Resources\Environment getEnvironments()
 * @method static \Novu\SDK\Resources\Environment getEnvironmentsAPIKeys()
 * @method static \Novu\SDK\Resources\Environment regenerateEnvironmentsAPIKeys(array $data = [])
 * @method static \Novu\SDK\Resources\Environment createEnvironment(array $data)
 * @method static \Novu\SDK\Resources\Environment updateEnvironment(string $environmentId, array $data)
 * @method static \Novu\SDK\Resources\Environment updateWidgetSettings(array $data)
 * @method static \Novu\SDK\Resources\ExecutionDetail getExecutionDetails(array $queryParams = [])
 * @method static \Novu\SDK\Resources\Feed getFeeds()
 * @method static \Novu\SDK\Resources\Feed createFeed(array $data)
 * @method static \Novu\SDK\Resources\Feed deleteFeed(string $feedId)
 * @method static \Novu\SDK\Resources\Integration getIntegrations()
 * @method static \Novu\SDK\Resources\Integration createIntegration(array $data)
 * @method static \Novu\SDK\Resources\Integration getActiveIntegrations()
 * @method static \Novu\SDK\Resources\Integration updateIntegration(string $integrationId, array $data)
 * @method static \Novu\SDK\Resources\Integration deleteIntegration(string $integrationId)
 * @method static \Novu\SDK\Resources\Integration getWebhookSupportStatusForProvider(string $providerId)
 * @method static mixed filterLayouts(array $queryParams = [])
 * @method static \Novu\SDK\Resources\Layout createLayout(array $bodyParams)
 * @method static \Novu\SDK\Resources\Layout getLayout(string $layoutId)
 * @method static bool|string deleteLayout(string $layoutId)
 * @method static \Novu\SDK\Resources\Layout updateLayout(string $layoutId, array $bodyParams)
 * @method static bool|string setLayoutAsDefault(string $layoutId)
 * @method static mixed getMessages(array $queryParams = [])
 * @method static \Novu\SDK\Resources\Message deleteMessage($messageId)
 * @method static \Novu\SDK\Resources\Tenant createTenant(array $data)
 * @method static \Novu\SDK\Resources\Tenant updateTenant(string $tenantId, array $data)
 * @method static \Novu\SDK\Resources\Tenant deleteTenant(string $tenantId)
 * @method static \Novu\SDK\Resources\Tenant getTenantList(array $queryParams = [])
 * @method static \Novu\SDK\Resources\Tenant getTenant(string $tenantId)
 * @method static \Novu\SDK\Resources\Trigger triggerEvent(array $data)
 * @method static \Novu\SDK\Resources\Trigger bulkTriggerEvent(array $data)
 * @method static \Novu\SDK\Resources\Trigger broadcastEvent(array $data)
 * @method static \Novu\SDK\Resources\Trigger cancelEvent(string $transactionId)
 * @method static \Novu\SDK\Resources\NotificationGroup getNotificationGroups()
 * @method static \Novu\SDK\Resources\NotificationGroup createNotificationGroup(array $data)
 * @method static \Novu\SDK\Resources\NotificationTemplate getNotificationGroups()
 * @method static \Novu\SDK\Resources\NotificationTemplate createNotificationTemplate(array $data)
 * @method static \Novu\SDK\Resources\NotificationTemplate getANotificationTemplate(string $templateId)
 * @method static \Novu\SDK\Resources\NotificationTemplate updateNotificationTemplateStatus(string $templateId, array $data)
 * @method static \Novu\SDK\Resources\NotificationTemplate deleteNotificationTemplate(string $templateId)
 * @method static \Novu\SDK\Resources\Workflow getWorkflows(int $page = 1, int $limit = 10)
 * @method static \Novu\SDK\Resources\Workflow createWorkflow(array $data)
 * @method static \Novu\SDK\Resources\Workflow getWorkflow(string $workflowId)
 * @method static \Novu\SDK\Resources\Workflow updateWorkflow(string $workflowId, array $data)
 * @method static bool deleteWorkflow(string $workflowId)
 * @method static \Novu\SDK\Resources\Workflow updateWorkflowStatus(string $workflowId, array $data)
 * @method static \Novu\SDK\Resources\Blueprint getBlueprintsGroupByCategory()
 * @method static \Novu\SDK\Resources\Blueprint getBlueprints(string $templateId)
 * @see \Novu\SDK\Novu
 */
class Novu extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'novu';
    }
}
