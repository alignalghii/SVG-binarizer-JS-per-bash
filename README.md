Imagine that You have a vector-graphical application (e.g. a floorplan designer), where the user edits on the client-side inline SVG.
You want to enable the unsers to download the floorplans they have edited.
Although Javascript offers a client-side conversion way (via Blob class and canvas element), but it behaves wrongly when the SVG contains referenced subimage links (e.g. <image> elements or <def>s).
This application solves the problem, on the price that the conversion must be done with heavy tools: server-side.
