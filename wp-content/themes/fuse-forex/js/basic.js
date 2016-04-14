$(document).ready(function() {
/* Basic JS file */

	// Hold value for Line diagram 
	var diagramData = [{t:25, v:504}];

    var pathinfo_original = [{x:25, y:505},
                    {x:1918, y:190}];

    // path points for line to draw 
    var pathinfo = [{x:-20, y:532},
                    {x:136, y:434},
                    {x:270, y:434},
                    {x:327, y:346},
                    {x:477, y:449},
                    {x:650, y:338},
                    {x:718, y:392},
                    {x:795, y:355},
                    {x:882, y:428},
                    {x:963, y:341},
                    {x:1043, y:344},
                    {x:1122, y:252},
                    {x:1179, y:305},
                    {x:1239, y:252},
                    {x:1290, y:328},
                    {x:1393, y:209},
                    {x:1459, y:257},
                   	{x:1519, y:220},
                    {x:1563, y:236},
                    {x:1701, y:173},
                    {x:1744, y:197},
                    {x:1834, y:134},
                    {x:1958, y:215}];

    //var pathinfo = [{x:1393, y:209}];

	// Data info 
	var datainfo = {"nodes":[{"name":"Myriel","group":1},
                             {"name":"Napoleon","group":1}]};

	// Create path 
    var svg = d3.select("#line_container");
    var path = svg.append("svg:svg").attr("width", 700).attr("height", 300);

    // Function to generate SVG Line 
    var d3line2 = d3.svg.line()
    .x(function(d){return d.x;})
    .y(function(d){return d.y;})
    .interpolate("linear"); 

    // crete  SVG line 
    path.append("svg:path")
        .attr("d", d3line2(pathinfo))
        .style("stroke-width", 8)
        .style("stroke", "transparent")
        .style("fill", "none");

	// Add animation here 

	var svg = d3.select("#line_container svg");
    var path = svg.select("path").call(transition);
    var startPoint = pathStartPoint(path);
    var markerPic = "/wordpress.local/fuse-forex/wp-content/themes/fuse-forex/style/circle_i.png";
    var marker = svg.append("g")
        .attr("id", "marker_group")
        .attr("transform", "translate(" + startPoint + ")")
        .attr("width", 70)
        .attr("height", 70);
	/*
    marker.append("image")
        .attr("xlink:href", " ")
        .attr("id", "marker_sub")
        .attr("transform", "translate( -35, -35)")
        .attr("width", 70)
        .attr("height", 70);
	*/

    marker.append("image")
        .attr("xlink:href", markerPic)
        .attr("id", "marker")
        .attr("transform", "translate( -35, -35)")
        .attr("width", 70)
        .attr("height", 70);

    marker.append("text")
        .attr("transform", "translate( 0, -45)")
    	.attr("font-family", "Verdana")
        .attr("font-size", "20")
        .attr("width", 140)
        .attr("fill", "#fbd958")
        .attr("x", "0")
        .attr("y", "0")
        .attr("text-anchor", "middle")
        .attr("id", "marker_number")
        .text('124.62');


    //Get path start point for placing marker
    function pathStartPoint(path) {
        var d = path.attr("d"),
            dsplitted = d.split(" ");
        return dsplitted[1];
    }

    function transition(path) {
        path.transition()
            .ease("linear")
            .duration(32500)
            .attrTween("stroke-dasharray", tweenDash)
            .each("end", function() { d3.select(this).call(transition); });// infinite loop
    }

    function tweenDash() {
        var l = path.node().getTotalLength();
        var i = d3.interpolateString("0," + l, l + "," + l); // interpolation of stroke-dasharray style attr
        return function(t) {
            var marker = d3.select("#marker_group");
            var markerNumber = d3.select("#marker_number");
            var p = path.node().getPointAtLength(t * l);
            var xPosition = p.x - 0;
            var yPosition = p.y - 0;
            //move marker
            marker.attr("transform", "translate(" + xPosition + "," + yPosition + ")");
            // calculate diagram data here - 500-209:291 / 291-126.62:164.38 / 335.62
            var yData = yPosition.toFixed(2);
            var diagramData = (((500 - yPosition) / 2.48102993) + 7.33).toFixed(2);
            markerNumber.text(diagramData);
            return i(t);
        }
    }

});	