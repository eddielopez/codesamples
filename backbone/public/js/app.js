//Extend backbone Router
var AppRouter = Backbone.Router.extend({

    /*
    * URL object properties
    * The browser URL call the appropriate functions.
    * ie - url sitename.com/menu-list/new calls the itemForm function
    *
    * */
    routes:{
        "": "list",
        "menu-items/new": "itemForm",
        "menu-items/:item": "itemDetails" /*the : allows to pass variable via the URL */
    },

    /*called when approuter object is initialized*/

    initialize: function(){

        this.menuItemView = new MenuItemDetails(
            {
                siteurl: "www.google.com"

            }
        );

        this.menuListView = new MenuListView(
            {
                items:[

                    "Reliance",
                    "Investors Title",
                    "Sax BST"

                ]
            }
        );
    },

    list: function(){
        $('#app-content').html(this.menuListView.render().el);
    },

    itemDetails: function (item){
      /*reference the menuItemView object*/
      this.menuItemView.options.sitename = item;

     /*
       call render function associated with this
       router then getting the el property*/
      $('#app-content').html(this.menuItemView.render().el);
    },
    itemForm: function(){
        $('#app-content').html('New website form');
    }
});


//new object created based on Router
var app = new AppRouter();

$(function(){
   Backbone.history.start();
});
