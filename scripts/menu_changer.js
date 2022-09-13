var delay = 1000;
setTimeout(function() {
    $(function(){

        $('#divMenuRight ul li').each(function(){
            var $this = $(this);
            // if the current path is like this link, make it active

            var current = location.pathname;
            if(window.location.href.indexOf("index") > -1 && $this.attr("tag") == "index") {
                $this.addClass('active');
            }
            //else $this.removeClass('active');
            if(window.location.href.indexOf("reference") > -1 && $this.attr("tag") == "reference") {
                $this.addClass('active');
            }
            //else $this.removeClass('active');
            if(window.location.href.indexOf("documentation") > -1 && $this.attr("tag") == "documentation") {
                $this.addClass('active');
            }
            //else $this.removeClass('active');
            if(window.location.href.indexOf("contact") > -1 && $this.attr("tag") == "contact") {
                $this.addClass('active');
            }
            //else $this.removeClass('active');
        })
    })
}, delay);


