# bib-builder
A PHP presentation layer used for displaying and interacting with Zotero group libraries.

## General Overview, Project Inception, and End Goals

Peggy Wright Cleveland came to ODRS with a project idea involving compiling the works of and about Bernard Binlin Dadie into an online resource that is publicly accessible, supports contribution from anyone in the community, and is interactive so that users can search and find relevant material.
 
Zotero is the right tool because it was designed to support bibliographic entries, includes structured metadata fields across different content types, is open source and free to use, and the Zotero development team have built and provide everyone access to a Zotero API that allows developers to access user and group libraries in dynamic ways.
 
I have been implementing a solution to Peggy’s project idea by learning about the Zotero API and surrounding open source development community.  Communicating with the Zotero API is relatively simple and Zotero provides documentation explaining the capabilities of the API; after a review of these materials, it is clear that we will be able to accomplish most, if not all, of the project objectives.  Peggy and her designated assistants will collect a lot of the initial bibliographic material and enter the data manually into the Zotero group.  The presentation layer application I am developing will then parse that data and present it to the user in dynamic ways.
 
What is next is to actually program the presentation layer.  I plan to use primarily PHP, along with HTML, CSS, JavaScript, and other necessary web development tools (such as GitHub to support collaboration).  The end goal is to have a working website that connects to the public Zotero group dedicated to the Dadie project.  A secondary goal is to program a deployable presentation layer that is configurable to work with any group library so that others can use BibBuilder to display dynamic bibliographies. 

## BibBuilder Feature (and Wish) List

The following is a list of possible features BibBuilder will have, as well as a list of things that would be awesome to add in time.

### DISPLAY
[ ] Display entire collection as a bibliography
[ ] Display by itemtype (articles only, books only, etc)
[ ] Display list of recently added/edited items
[ ] Display what is in library’s trash (strike this?)
[ ] All displayed citation’s should be Zotero-compatible, so a user can pick up citations from the online bibliography and add to their own Zotero library using the Z button
[ ] Option to display specific saved searches

### SEARCH
[ ] Search by itemtype (same thing as displaying by itemtype, but can allow for search that can limit by itemtype **and** keyword search)
[ ] Search by query - Searches titles and individual creator fields by default
[ ] Search by modification after a specified time (I have to test bounds of this feature, may be tied to Zotero version changes)
[ ] Search by tags

### ADD
[ ] Allow BibBuilder users to contribute to the group library. I see this as a great feature, but secondary to accomplish since it can be done through Zotero already.

