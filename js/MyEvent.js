$(document).ready(function(){

    $('#Suicide').click(function(){

        $('#DisplayerSuicide').toggle();
        $('#DisplayerBefriendersMu').hide('slow','swing');
        $('#DisplayerTalkOnSuicide').hide('slow','swing');
    })

    $('#BefriendersMu').click(function(){

        $('#DisplayerBefriendersMu').toggle();
        $('#DisplayerSuicide').hide('slow','swing');
        $('#DisplayerTalkOnSuicide').hide('slow','swing');
    })

    $('#TalkOnSuicide').click(function(){

        $('#DisplayerTalkOnSuicide').toggle();
        $('#DisplayerBefriendersMu').hide('slow','swing');
        $('#DisplayerSuicide').hide('slow','swing');
    })

});