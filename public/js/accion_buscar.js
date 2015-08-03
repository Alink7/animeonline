$(document).ready(function(){
	$('.ui.search')
  .search({
    apiSettings: {
      url: 'custom-search/?q={query}'
    },
    type: 'category'
  });
});