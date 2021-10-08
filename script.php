<script>
    $(document).ready(function(){
        $('#wrapper').fullpage({
            menu: '#menu',
            anchors: ['sec1', 'sec2', 'sec3', 'sec4', 'sec5'],
            autoScrolling:true,
		    //scrollHorizontally: true,
            loopTop: true,
            loopBottom: true,
            licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
			scrollOverflow: true
        });
        $.fn.fullpage.setAllowScrolling(true);
    });
</script>