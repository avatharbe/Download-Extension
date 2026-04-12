Downloads Extension for phpBB 3.3
==========

Download manager for phpBB — manage file downloads with categories, permissions, versioning, comments, and more.
Originally developed by [OXPUS](https://www.oxpus.net), maintained by [Avathar.be](https://www.avathar.be).

#### Version
9.0.0

[![Tests](https://github.com/avatharbe/Download-Extension/actions/workflows/tests.yml/badge.svg?branch=dev)](https://github.com/avatharbe/Download-Extension/actions/workflows/tests.yml)

#### Support
- [Support forum](https://www.avathar.be/forum)

#### Requirements
- phpBB 3.3.0 or higher
- PHP 8.1 or higher

#### Features

**Download management**
- Hierarchical category system with configurable paths
- File uploads with automatic hash naming and integrity verification (MD5/SHA)
- Version history with changelogs and file attachments
- External download links (URL-based) with permission gating
- Convert external downloads to managed (local) files from ACP
- Move downloads between categories from the ACP edit form

**Access control**
- Per-category, per-group permissions (view, download, upload, moderate)
- Group-based permission overrides with OR logic (any group granting = access)
- Comment read/write permissions per category
- File approval workflow with moderation queue

**Comments and interaction**
- BBCode-enabled comments per download with approval queue
- Favorite downloads with notification on new versions
- RSS feed generation with permission filtering

**Moderation**
- Moderation Control Panel for approving downloads and comments
- Broken download reporting
- File extension blacklist

**Administration**
- ACP overview dashboard
- Category and file management
- Permission management and permission checker
- Setup assistant for initial configuration
- Toolbox for file system maintenance

#### Languages supported
- English, French, German, Spanish

### Changelog
- 9.0.0
  - Fork from oxpus/dlext 8.3.1
  - Removed: Bug Tracker (#3), Hacklist (#4), Traffic/Bandwidth Management (#2), Custom Profile Fields (#6)
  - Added: Move downloads between categories (#1)
  - Added: Convert external downloads to managed files (#10)
  - Minimum PHP version raised to 8.1
  - Minimum phpBB version raised to 3.3
  - CI: GitHub Actions with EPV, code sniffer, PHP 8.1-8.4

### Installation
1. [Download the latest release](https://github.com/avatharbe/Download-Extension/releases) and unzip it.
2. Copy the `oxpus/dlext/` folder to `/ext/oxpus/dlext/`.
3. Navigate in the ACP to `Customise -> Manage extensions`.
4. Find `Hotschi's Downloads` under "Disabled Extensions" and click `Enable`.

### Upgrade from 8.3.x
1. Delete the contents of `/ext/oxpus/dlext/` except the `/ext/oxpus/dlext/files/` folder.
2. Copy the new `oxpus/dlext/` folder to `/ext/oxpus/dlext/`.
3. Navigate in the ACP to `Customise -> Manage extensions`.
4. The extension will run pending migrations to remove deprecated features.

### Uninstallation
1. Navigate in the ACP to `Customise -> Manage extensions`.
2. Click the `Disable` link for `Hotschi's Downloads`.
3. To permanently uninstall, click `Delete Data`, then delete the `dlext` folder from `/ext/oxpus/`.

### License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)

Originally (c) 2002-2025 OXPUS (Karsten Ude)
Fork (c) 2026 - Avathar.be (Andy Vandenberghe)
