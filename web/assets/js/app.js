var AppRouter = Backbone.Router.extend({

    routes: {
        ""      : "content",
        "edit"  : "edit"
    },

    initialize: function () {
        this.headerView = new HeaderView();
        $('header').html(this.headerView.el);
    },

	content: function(page) {
        var p = page ? parseInt(page, 10) : 1;
        var wineList = new WineCollection();
        wineList.fetch({success: function(){
            $("#content").html(new WineListView({model: wineList, page: p}).el);
        }});
        this.headerView.selectMenuItem('home-menu');
    },

    edit: function (id) {
        var wine = new Wine({id: id});
        wine.fetch({success: function(){
            $("#content").html(new WineView({model: wine}).el);
        }});
        this.headerView.selectMenuItem();
    }

});

utils.loadTemplate(['HeaderView', 'ContentView', 'FormView'], function() {
    app = new AppRouter();
    Backbone.history.start();
});