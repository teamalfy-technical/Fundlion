$(function () {
    // $('#time_event_2_cols').css('display', 'none');

    //sample date data that should be coming from the database 
    var eventData = [
        { "date": "2019-07-20", "badge": false, "title": "Example 1" },
        { "date": "2019-07-21", "badge": false, "title": "Example 2" },
        { "date": "2019-07-22", "badge": false, "title": "Example 2" },
        { "date": "2019-07-23", "badge": false, "title": "Example 2" },
        { "date": "2019-07-24", "badge": false, "title": "Example 2" },
        { "date": "2019-07-31", "badge": false, "title": "Example 2" },
        { "date": "2019-08-01", "badge": false, "title": "Example 2" },
        { "date": "2019-08-05", "badge": false, "title": "Example 2" },
        { "date": "2019-08-06", "badge": false, "title": "Example 2" },
        { "date": "2019-08-07", "badge": false, "title": "Example 2" },
        { "date": "2019-08-08", "badge": false, "title": "Example 2" },
        { "date": "2019-08-16", "badge": false, "title": "Example 2" },
        { "date": "2019-08-12", "badge": false, "title": "Example 2" },
        { "date": "2019-08-13", "badge": false, "title": "Example 2" },
        { "date": "2019-08-15", "badge": false, "title": "Example 2" },
        { "date": "2019-08-22", "badge": false, "title": "Example 2" },
        { "date": "2019-08-30", "badge": false, "title": "Example 2" }
    ];
    $("#calendar").zabuto_calendar({
        cell_border: false,
        today: true,
        show_days: true,
        weekstartson: 0,
        show_previous: false,
        language: "en",
        data: eventData,
        modal: true,
        action: function () {
            var date = $('#' + this.id).data('date');
            var hasEvent = $('#' + this.id).data('hasEvent');
            if (hasEvent==true) {
                console.log(date);
                $('.times').show(300).fadeIn();
                $('#no_event').hide(200);
            }else{
                $('.times').hide(300);
                $('#no_event').show(200).html('Please choose a highlighted date to see available times. There are no available times on '+date+'.');
                console.log('No Event');
            }
        },
        nav_icon: {
            prev: '<i class="fa fa-chevron-left orange"></i>',
            next: '<i class="fa fa-chevron-right orange"></i>'
        }
    });

    var today = new Date('2019, 7, 20, 12, 30, 0, 0')
    var curHr = today.getHours()
    var time = null;

    if (curHr < 12) {
        var time = "Morning";
        console.log(time);
        
    } else if (curHr < 18) {
        var time = "Afternoon";
        console.log(time);

    } else {
        var time = "Evening";
        console.log(time);

    }


});