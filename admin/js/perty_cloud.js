
var icons = new Skycons({"color": "#fcb216"}),
                list  = ["partly-cloudy-day"],i;

            for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();