<?php

/**
 * Defined routes for plugin fashionshop
 */
OW::getRouter()->addRoute(new OW_Route('fashionshop-products-manager', 'products/manager', 'FASHIONSHOP_CTRL_Products', 'manager'));

// OW::getRouter()->addRoute(new OW_Route('skeleton-localization', 'skeleton/localization', 'SKELETON_CTRL_Localization', 'index'));
// OW::getRouter()->addRoute(new OW_Route('skeleton-localization-delete-key', 'skeleton/localization/delete/:key', 'SKELETON_CTRL_Localization', 'deleteKey'));

// OW::getRouter()->addRoute(new OW_Route('skeleton-routing', 'skeleton/routing', 'SKELETON_CTRL_Routing', 'index'));

// OW::getRouter()->addRoute(new OW_Route('skeleton-forms', 'skeleton/forms', 'SKELETON_CTRL_Forms', 'index'));

// OW::getRouter()->addRoute(new OW_Route('skeleton-database', 'skeleton/database', 'SKELETON_CTRL_Database', 'index'));
// OW::getRouter()->addRoute(new OW_Route('skeleton-database-delete-item', 'skeleton/database/delete/:id', 'SKELETON_CTRL_Database', 'deleteItem'));

// OW::getRouter()->addRoute(new OW_Route('skeleton-file-storage', 'skeleton/file-storage/', 'SKELETON_CTRL_FileStorage', 'index'));
// OW::getRouter()->addRoute(new OW_Route('skeleton-file-storage-preview', 'skeleton/file-storage/preview', 'SKELETON_CTRL_FileStorage', 'preview'));

// OW::getRouter()->addRoute(new OW_Route('skeleton-mail-sending', 'skeleton/mail-sending', 'SKELETON_CTRL_MailSending', 'index'));

// OW::getRouter()->addRoute(new OW_Route('skeleton-notifications', 'skeleton/notifications', 'SKELETON_CTRL_Notifications', 'index'));

// OW::getRouter()->addRoute(new OW_Route('skeleton-newsfeed', 'skeleton/newsfeed', 'SKELETON_CTRL_Newsfeed', 'index'));

// OW::getRouter()->addRoute(new OW_Route('skeleton-floatbox', 'skeleton/floatbox', 'SKELETON_CTRL_Floatbox', 'index'));

// OW::getRouter()->addRoute(new OW_Route('skeleton-widgets', 'skeleton/widgets', 'SKELETON_CTRL_Widgets', 'index'));
// OW::getRouter()->addRoute(new OW_Route('skeleton-widgets-delete', 'skeleton/widgets/delete/:id', 'SKELETON_CTRL_Widgets', 'delete'));

// OW::getRouter()->addRoute(new OW_Route('skeleton-profile_questions', 'skeleton/profile_questions', 'SKELETON_CTRL_ProfileQuestions', 'index'));

// OW::getRouter()->addRoute(new OW_Route('skeleton-access_level', 'skeleton/access_level', 'SKELETON_CTRL_AccessLevel', 'index'));

// OW::getRouter()->addRoute(new OW_Route('skeleton-cron', 'skeleton/cron', 'SKELETON_CTRL_Example', 'cron'));

// OW::getRouter()->addRoute(new OW_Route('skeleton-ping', 'skeleton/ping', 'SKELETON_CTRL_Ping', 'index'));



/**
 * Adding example section to notifications settings page
 *
 * @param BASE_CLASS_EventCollector $e
 */
// function skeleton_on_notify_actions( BASE_CLASS_EventCollector $e )
// {
//     $sectionLabel = OW::getLanguage()->text('skeleton', 'notification_section_label');

//     $e->add(array(
//         'section' => 'skeleton',
//         'action' => 'example',
//         'description' => OW::getLanguage()->text('skeleton', 'email_notifications_setting_example'),
//         'selected' => true,
//         'sectionLabel' => $sectionLabel,
//         'sectionIcon' => 'ow_ic_clock'
//     ));