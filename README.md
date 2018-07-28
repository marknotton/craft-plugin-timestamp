
<img src="http://i.imgur.com/ZcGCU3r.png" alt="Timestamp" align="left" height="60" />

# Timestamp *for Craft CMS*

> This plugin is no longer maintained. I'm committing to Craft 3 development only. Feel free to use the source code as you like. If you're looking for a Craft 3 version of this plugin, it's likely I've merged parts or all of this plugin into my [Helpers module.](https://github.com/marknotton/craft-module-helpers)

Twig filter to output correctly formatted time/datetime information for an entry.

## Settings
| Parameters       | Type   | Default | Description |
| --------------- | ------ | ------- | ----------- |
| Format          | String | 'd M Y' | Date format as per [**PHP Date**](http://php.net/manual/en/function.date.php)
| Tags *optional* | String |         | Wrap each formatted element into a span.

### Basic Usage
```
{{ entry|timestamp }}
```
### Basic Output
```
<time datetime="2016-04-25T00:00:00+00:00">25 Apr 201 </time>
```
----
### Advance Usage
Adding the tags is intended to allows for bespoke styling options.
```
{{ entry|timestamp('d F y', 'span') }}
```
### Advance Output
```
<time datetime="2016-04-25T00:00:00+00:00">
  <span>25</span>
  <span>April</span>
  <span>16</span>
</time>
```
