import { library, dom } from "@fortawesome/fontawesome-svg-core";
import { faClipboardList } from "@fortawesome/free-solid-svg-icons/faClipboardList";
import { faCircle } from "@fortawesome/free-solid-svg-icons/faCircle";
import { faInfo } from "@fortawesome/free-solid-svg-icons/faInfo";
import { faSearch } from "@fortawesome/free-solid-svg-icons/faSearch";
import { faChevronUp } from "@fortawesome/free-solid-svg-icons/faChevronUp";
import { faArrowDown } from "@fortawesome/free-solid-svg-icons/faArrowDown";
import { faGlobe } from "@fortawesome/free-solid-svg-icons/faGlobe";
import { faFilePdf } from "@fortawesome/free-regular-svg-icons/faFilePdf";
import { faExternalLinkAlt } from "@fortawesome/free-solid-svg-icons/faExternalLinkAlt";
import { faHandshake } from "@fortawesome/free-regular-svg-icons/faHandshake";
import { faScrewdriver } from "@fortawesome/free-solid-svg-icons/faScrewdriver";
import { faPaintRoller } from "@fortawesome/free-solid-svg-icons/faPaintRoller";
import { faImages } from "@fortawesome/free-regular-svg-icons/faImages";

library.add(
    faClipboardList,
    faCircle,
    faInfo,
    faSearch,
    faChevronUp,
    faArrowDown,
    faGlobe,
    faFilePdf,
    faExternalLinkAlt,
    faHandshake,
    faScrewdriver,
    faPaintRoller,
    faImages
);
dom.watch();