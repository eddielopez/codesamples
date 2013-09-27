var MenuItemDetails = Backbone.View.extend({


    /* Handlebar view template */

    template: Handlebars.compile(
        '<div>'
            + '<h1>{{ sitename }}</h1>'
            + '<p>{{ siteurl }}</p>' +
        '</div>'
    ),

    render: function(){

        this.$el.html(this.template(this.options));
        return this;
    }
});


    /*

     We can render view templates by concatenating string but that can get messy
     so I will leave this example below so that you can see the difference between this,
     and a templating library like handlebars. Note that you can use which ever templating lib

     */


    /*  render: function(){

        var markup = '<div>'+

        '<h1>'+ this.options.sitename +'</h1>'+
         '<p>' + this.options.siteurl + '</p>' +

        '</div>';

        this.$el.html(markup);
        return this;
    }
});*/