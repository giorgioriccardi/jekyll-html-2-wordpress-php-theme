var videowall = new Vue({
  el: '#videowall',

  data: {
    playlistURL: 'https://www.googleapis.com/youtube/v3/playlistItems?',
    part: '&part=' + $('#videowall').attr('part'),
    channelId: '&channelId=' + $('#videowall').attr('channel-id'),
    playlistId: '&playlistId=' + $('#videowall').attr('playlist-id'),
    maxResults: '&maxResults=' + '50',
    apiKey: '&key=' + $('#videowall').attr('api'),
    type: '&type=' + 'video%2C+playlist',
    videos: [],
    next: '',
    opened: false,
    videoIframe: '',
    videoTitle: ''
  },
  
  components: {
    'li-video': {
      template:
        '<li id="{{snippet.resourceId.videoId}}" data-title="{{snippet.title}}">' +
          '<img src="{{snippet.thumbnails.medium.url}}">' +
          '<div class="supporting-text">' + 
            '<h2>{{snippet.title}}</h2>' + 
            '<p>{{snippet.description}}</p>' +  
          '</div>' + 
        '</li>'
    }
  },

  ready: function() {
    this.fetchVideos();
  },

  methods: {
    fetchVideos: function() {
      var self = this;
      var channelVideosList = self.playlistURL + self.apiKey + self.part + self.playlistId + self.maxResults + self.type + '';

      $.getJSON(channelVideosList, function(response) {
        for (var item of response.items) {
            self.videos.push(item);
        }
        self.next = response.nextPageToken;
      });
    },
    scroll: function (e) {
      var self = this;
      if (self.next && (e.target.scrollTop + e.target.offsetHeight + 10) >= e.target.scrollHeight) {
        var channelVideosListUrl = self.playlistURL + '&pageToken=' + self.next + self.apiKey + self.part + self.playlistId + self.maxResults + self.type + '';

        $.getJSON(channelVideosListUrl, function(response) {
          for (var item of response.items) {
              self.videos.push(item);
          }
          self.next = response.nextPageToken;
        });
      }
    },
    toggleVideo: function(e) {
      var self = this;

      if(!e.target.classList.contains('close')) {
        self.videoIframe = e.target.id;
        self.videoTitle = e.target.getAttribute('data-title');
      }
      
      self.opened = !self.opened;

      //youtube player related
      player.stopVideo();
      player.cueVideoById(self.videoIframe);
    },
    returnFalse: function(e) {
      e.preventDefault();
    }
  }
});