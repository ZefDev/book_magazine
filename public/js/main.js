$(document).ready(function(){

    $(document).on('click', '.pagination a', function(event){
      event.preventDefault();
      var page = $(this).attr('href').split('page=')[1];
      var link = ($(this).attr('href').split('/')[3]).split('?')[0];
      fetch_data(page,link);
    });
    function fetch_data(page,link){
      $.ajax({
        url: '/'+link+'/fetch_data?page='+page,
        success:function(data){
          $('#content_container').html(data);
        }
      });
    }

});
