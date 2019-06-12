---
extends: _layouts.master
title: IPv6 Core Protocols
---

## Resources

* <i class="far fa-file-pdf fa-fw"></i> [IPv6 Core Protocols Test Specification (Version 4.0.8)](../docs/Core_Conformance_Latest.pdf)
* <i class="far fa-file-pdf fa-fw"></i> [IPv6 Core Protocols Interoperability Test Scenario (Version 4.0.5)](../docs/Core_Interoperability_Latest.pdf)
* <i class="far fa-file-pdf fa-fw"></i> [Appendix IPv6 Core Protocols Interoperability Test Scenario (Version 4.0.2)](../docs/Core_Interoperability_Appendix_Latest.pdf)
* <i class="fas fa-external-link-alt fa-fw"></i> [Self-test Tools (TAHI Project)](https://www.ipv6ready.org.cn/home/views/default/resource/logo/phase2-core/index.htm)
* <i class="fas fa-external-link-alt fa-fw"></i> [Self-test Tools (IOL INTACT)](https://www.iol.unh.edu/solutions/test-tools/intact)

**NOTE:** The IPv6 Core Interoperability test requires testing against 4 different Vendors with different IPv6 Stacks. The counter implementations must be 2 Routers and 2 Hosts.

The following is an example of an acceptable application:

|            | Vendor              | Device Name  |
|------------|---------------------|--------------|
| **Router** | The FreeBSD Project | FreeBSD      |
|            | The NetBSD Project  | NetBSD       |
| **Host**   | Kernel.org          | Linux Kernel |
|            | The OpenBSD Project | OpenBSD      |

The following is **NOT** an acceptable application:

|            | Vendor             | Device Name  |
|------------|--------------------|--------------|
| **Router** | The Fedora Project | Fedora Core  |
|            | The NetBSD Project | NetBSD       |
| **Host**   | Kernel.org         | Linux Kernel |
|            | Ubuntu             | Ubuntu       |
