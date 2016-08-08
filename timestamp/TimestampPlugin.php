<?php
namespace Craft;

class TimestampPlugin extends BasePlugin {
  public function getName() {
    return Craft::t('Timestamp');
  }

  public function getVersion() {
    return '0.1';
  }

  public function getDeveloper() {
    return 'Yello Studio';
  }

  public function getDeveloperUrl() {
    return 'http://yellostudio.co.uk';
  }

  public function getDocumentationUrl() {
    return 'https://github.com/marknotton/craft-plugin-timestamp';
  }

  public function getReleaseFeedUrl() {
    return 'https://raw.githubusercontent.com/marknotton/craft-plugin-timestamp/master/timestamp/releases.json';
  }

  public function addTwigExtension() {
    Craft::import('plugins.timestamp.twigextensions.timestamp');
    return new timestamp();
  }
}
