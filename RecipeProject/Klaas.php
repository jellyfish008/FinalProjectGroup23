
<html>
<head>
<script src="jquery.min.js"></script>
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<style type="text/css">
</style>
</head>
    <script type="text/javascript">
var query = [
"PREFIX rdfs:		<http://www.w3.org/2000/01/rdf-schema#>",
"PREFIX dbo:		<http://dbpedia.org/ontology/>",
"PREFIX dbpedia:	<http://dbpedia.org/resource/>",
"SELECT DISTINCT ?capital ?area",
"WHERE {",
"	VALUES ",
"?capital { dbpedia:Amsterdam dbpedia:Berlin } .",
"	?country dbo:capital	?capital.",
"	?capital dbo:areaTotal	?area .",
"}"
].join(" ");
var url = 'https://dbpedia.org/sparql';
var queryUrl = url+"?query="+ encodeURIComponent(query) +"&format=json";
    $.ajax({
        dataType: "jsonp",
        url: queryUrl,
        
        
       <html>
  <head>
    <title>Example 2 - SGvizler</title>
    <a href="index.html" target="_blank">Example 1</a><br/>
    <a href="example3.html" target="_blank">example 3</a><br/>
    <a href="example4.html" target="_blank">example 4</a><br/>
    <a href="example-jquery.html" target="_blank">Jquery example</a><br/>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="sgvizler.js"></script>
    <script>
         sgvizler
             .prefix("ex", "http://example.org#")
             .defaultEndpointURL("https://dbpedia.org/sparql")
             .defaultQuery("SELECT * { ?a ?b ?c, ?d, ?e } LIMIT 7")
             .defaultChartFunction("sgvizler.visualization.Table")
             .defaultChartWidth(500)
             .defaultChartHeight(500);
    </script>
  </head>
  <body>
    <h1>Sgvizler example 2</h1>
    <p>Please allow the page to load for a few seconds.</p>
    <script>
    var Q = new sgvizler.Query();                           // Create a Query instance.
    // Values may also be set in the sgvizler object---but will be
    // overwritten here.
    Q.query("SELECT * {?s ?p ?o} LIMIT 10")
        .endpointURL("https://dbpedia.org/sparql")
        .endpointOutputFormat("json")                      // Possible values 'xml', 'json', 'jsonp'.
        .chartFunction("google.visualization.Table")       // The name of the function to draw the chart.
        .draw("myElementID");                              // Draw the chart in the designated HTML element.
    </script>
    <div id="myElementID"></div>
  </body>

        success: function( _data ) {
            var results = _data.results.bindings;
            //print_r(results);
            document.getElementById('results').innerHTML = results + "<br/><br/>";
            document.getElementById('results').innerHTML += JSON.stringify(results, null, 4) + "<br/><br/>";
            for ( var i in results ) {
                //var res = results[i].abstract.value;
                document.getElementById('results').innerHTML += results[i].capital.value + '   -   area size = ' + results[i].area.value + "<br/>";
            }
        }
    });
</script>
    <body>
        <h1>Jquery example</h1>
        <a href="index.html" target="_blank">Example 1</a><br/>
        <a href="example2.html" target="_blank">example 2</a><br/>
        <a href="example3.html" target="_blank">example 3</a><br/>
        <a href="example4.html" target="_blank">example 4</a><br/><br/>
        <div id='results'></div>
    </body>

<html>
  <head>
    <title>Example 3 - SGvizler</title>
    <a href="index.html" target="_blank">Example 1</a><br/>
    <a href="example2.html" target="_blank">example 2</a><br/>
    <a href="example4.html" target="_blank">example 4</a><br/>
    <a href="example-jquery.html" target="_blank">Jquery example</a><br/>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="sgvizler.js"></script>
    <script>
            <var> MyOwnNamespace = {};</var>
      MyOwnNamespace.HelloWorld = sgvizler.chartsAdd(
          // 1. arg: module.
          "MyOwnNamespace",
          // 2. arg: function name.
          "HelloWorld",
          // 3. arg: visualisation function.
          function (datatable, chartOptions) {
            // collect from numbers from the datatable:
        var c, noColumns = datatable.getNumberOfColumns(),
            r, noRows    = datatable.getNumberOfRows(),
            // set default values for chart options
            opt = $.extend({ word: 'Hello World' }, chartOptions),
            tablecontents = "";
        for (r = 0; r < noRows; r += 1) {
            tablecontents += '<tr>';
            for (c = 0; c < noColumns; c += 1) {
                tablecontents += '<td>' + opt.word + '</td>';
            }
            tablecontents += '</tr>';
        }
        $(this.container)
            .empty()
            .html(tablecontents);
        // Using an external library, loaded by the dependencies (arg. 4)
        new Tablesort(this.container);
          },
          // 4. arg: dependencies. 'Tablesort' is the function we need.
          { Tablesort: "//cdnjs.cloudflare.com/ajax/libs/tablesort/1.6.1/tablesort.min.js" }
      );
      $(document).ready(
          function (){ sgvizler.containerDrawAll(); }
      );
    </script>
  </head>
  <body>
    <h1>Sgvizler example 3</h1>
    <p>Please allow the page to load for a few seconds.</p>
  <table id="example" style="border: 1px solid brown;"
       data-sgvizler-endpoint="https://dbpedia.org/sparql"
       data-sgvizler-query="SELECT * { ?s ?p ?o, ?o2 } LIMIT 6"
       data-sgvizler-chart="MyOwnNamespace.HelloWorld"
       data-sgvizler-chart-options="word=Hi World">
  </table>
  </body>
<html>
  <head>
      <title>Example 4 - SGvizler</title>
      <a href="index.html" target="_blank">Example 1</a><br/>
      <a href="example2.html" target="_blank">example 2</a><br/>
      <a href="example3.html" target="_blank">example 3</a><br/>
      <a href="example-jquery.html" target="_blank">Jquery example</a><br/>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="sgvizler.js"></script>
    <script>
      $(document).ready(
          function (){ sgvizler.containerDrawAll(); }
      );
    </script>
  </head>
  <body>
    <h1>Sgvizler example 4</h1>
    <p>Please allow the page to load for a few seconds.</p>
    <div id="example"
         data-sgvizler-endpoint="http://sws.ifi.uio.no/sparql/npd"
         data-sgvizler-query="SELECT ?class (count(?instance) AS ?noOfInstances)
                            WHERE{ ?instance a ?class }
                            GROUP BY ?class
                            ORDER BY ?class"
         data-sgvizler-chart="google.visualization.PieChart"
         style="width:800px; height:400px;"></div>
  </body>
</html>
