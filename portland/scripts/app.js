angular
	.module('portlandApp', ['ui.router'])
	.config(MainRouter)

MainRouter.$inject = ['$stateProvider', '$urlRouterProvider'];
function MainRouter($stateProvider, $urlRouterProvider) {
	$stateProvider


		// Case Study Pages
		.state('amuse', {
			url: "/amuse",
			templateUrl: "app/templates/amuse.html",
			controller: "workCtrl"
		})
		.state('ajmal', {
			url: "/ajmal",
			templateUrl: "app/templates/ajmal.html",
			controller: "workCtrl"
		})
		.state('hamar', {
			url: "/hamar",
			templateUrl: "app/templates/hamar.html",
			controller: "workCtrl"
		})
		.state('aelia', {
			url: "/aelia",
			templateUrl: "app/templates/aelia.html",
			controller: "workCtrl"
		}).state('doha', {
			url: "/doha",
			templateUrl: "app/templates/doha.html",
			controller: "workCtrl"
		})
		.state('j-walker', {
			url: "/j-walker",
			templateUrl: "app/templates/jwalker.html",
			controller: "workCtrl"
		})
		.state('al-maryah-island', {
			url: "/al-maryah-island",
			templateUrl: "app/templates/al-maryah-island.html",
			controller: "workCtrl"
		})
		.state('british-land', {
			url: "/british-land",
			templateUrl: "app/templates/british-land.html",
			controller: "workCtrl"
		})
		.state('nice-duty-free', {
			url: "/nice-duty-free",
			templateUrl: "app/templates/nice-duty-free.html",
			controller: "workCtrl"
		})
		.state('markafoni', {
			url: "/markafoni",
			templateUrl: "app/templates/markafoni.html",
			controller: "workCtrl"
		})
		.state('zuwar', {
			url: "/zuwar",
			templateUrl: "app/templates/zuwar.html",
			controller: "workCtrl"
		})
		.state('lexicon', {
			url: "/lexicon",
			templateUrl: "app/templates/lexicon.html",
			controller: "workCtrl"
		})
		.state('coffee-week', {
			url: "/coffee-week",
			templateUrl: "app/templates/coffee-week.html",
			controller: "workCtrl"
		})
		.state('stavanger', {
			url: "/stavanger",
			templateUrl: "app/templates/stavanger.html",
			controller: "workCtrl"
		})
		.state('wolford', {
			url: "/wolford",
			templateUrl: "app/templates/wolford.html",
			controller: "workCtrl"
		})
		.state('luton', {
			url: "/luton",
			templateUrl: "app/templates/luton.html",
			controller: "workCtrl"
		})
		.state('halic', {
			url: "/halic",
			templateUrl: "app/templates/halic.html",
			controller: "workCtrl"
		})
		.state('gcsc', {
			url: "/gcsc",
			templateUrl: "app/templates/gcsc.html",
			controller: "workCtrl"
		})
		.state('emporium', {
			url: "/emporium",
			templateUrl: "app/templates/emporium.html",
			controller: "workCtrl"
		})
		.state('kef', {
			url: "/kef",
			templateUrl: "app/templates/kef.html",
			controller: "workCtrl"
		})
		.state('aelia-nice', {
			url: "/aelia-nice",
			templateUrl: "app/templates/aelia-nice.html",
			controller: "workCtrl"
		})
		.state('montreux', {
			url: "/montreux",
			templateUrl: "app/templates/montreux.html",
			controller: "workCtrl"
		})


		// WORK PAGES
		.state('work-retail-design', {
			url: "/work-retail-design",
			templateUrl: "app/templates/work-retail-design.html",
			controller: "workCtrl"
		})

		.state('work-market-comms', {
			url: "/work-market-comms",
			templateUrl: "app/templates/work-market-comms.html",
			controller: "workCtrl"
		})

		.state('work-sign-way', {
			url: "/work-sign-way",
			templateUrl: "app/templates/work-sign-way.html",
			controller: "workCtrl"
		})

		.state('work-masterplanning', {
			url: "/work-masterplanning",
			templateUrl: "app/templates/work-masterplanning.html",
			controller: "workCtrl"
		})

		.state('work-food-beverage', {
			url: "/work-food-beverage",
			templateUrl: "app/templates/work-food-beverage.html",
			controller: "workCtrl"
		})

		.state('work-transport', {
			url: "/work-transport",
			templateUrl: "app/templates/work-transport.html",
			controller: "workCtrl"
		})

		.state('work-insights', {
			url: "/work-insights",
			templateUrl: "app/templates/work-insights.html",
			controller: "workCtrl"
		})


		// OTHER PAGES
		.state('home', {
			url: '/home',
			templateUrl: 'app/templates/home.html',
			controller: 'homeCtrl'
		})
		.state('aboutus', {
			url: "/aboutus",
			templateUrl: "app/templates/aboutus.html",
			controller: "workCtrl"
		})
		.state('contact', {
			url: "/contact",
			templateUrl: "app/templates/contact.html",
			controller: "contactCtrl"
		})
		.state('news', {
			url: "/news/{newsArticle}",
			templateUrl:
				function(stateParams) {
					console.log(stateParams);
					return '/app/templates/news' + stateParams.newsArticle + '.html';
				},
			controller: "newsCtrl"
		})
		.state('news-post', {
			url: "/news-post",
			templateUrl: "app/templates/news-post.html",
		})
		.state('future-ready-questions', {
			url: "/future-ready-questions",
			templateUrl: "app/templates/future-ready-questions.html"
			//controller: "futureCtrl"
		})

		$urlRouterProvider.otherwise('/home');
};
