<html>
    <head>
        <title>Ajax sample (with CodeIgniter)</title>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">
            
            var controller = 'ajax_sample';
            var base_url = '<?php echo site_url(); //you have to load the "url_helper" to use this function ?>';

            function load_data_ajax(type){
                $.ajax({
                    'url' : base_url + '/' + controller + '/get_list_view',
                    'type' : 'POST', //the way you want to send data to your URL
                    'data' : {'type' : type},
                    'success' : function(data){ //probably this request will return anything, it'll be put in var "data"
                        var container = $('#container'); //jquery selector (get element by id)
                        if(data){
                            container.html(data);
                        }
                    }
                });
            }
        </script>

    </head>
    <body>
        <button onclick="load_data_ajax(1)">Load list (type 1)</button>
        <button onclick="load_data_ajax(2)">Load list (type 2)</button>

        <hr />
        
        <div id="container"></div>

    </body>
</html>
