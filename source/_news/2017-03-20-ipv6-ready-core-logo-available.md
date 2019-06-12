---
title: "Now Available: IPv6 Ready Core Logo (New Minor Revision 4.0.7)"
post_date: 2017-03-20 08:52:57
---
The [IPv6 Ready Core Conformance Test Specification](../resources/ipv6-core-protocols.html) has been updated with some minor changes as per the below:  


*   Added a possible problem to 3.1.2B,D, 3.1.3 I-J, 3.1.4 H-I for devices that don’t support EUI-64 address due to privacy concerns.
*   Removed requirement for the unused field in a Time Exceeded message (1.3.2B-D, 5.1.5A-B) to be zero due to RFC 4884.
*   Added a requirement to check the Hop Limit of 255 in IPv6 Header of Redirect.
*   Updated 4.1.8 to increase the hop limit due to attack vector if the device is forced to lower the hop limit.
*   Added a possible problem to 2.1.1C for RFC 7048 support.
*   Updated Unknown Destination Header from 7 to 17 since 7 has been allocated.
*   Removed Common Test Setup from 3.2.5.
