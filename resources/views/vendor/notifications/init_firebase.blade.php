{{-- var firebaseConfig = {
  apiKey: "{{setting('firebase_api_key','')}}",
  authDomain: "{{setting('firebase_auth_domain','')}}",
  databaseURL: "{{setting('firebase_database_url','')}}",
  projectId: "{{setting('firebase_project_id','')}}",
  storageBucket: "{{setting('firebase_storage_bucket','')}}",
  messagingSenderId: "{{setting('firebase_messaging_sender_id','')}}",
  appId: "{{setting('firebase_app_id')}}",
  measurementId: "{{setting('firebase_measurement_id', '')}}"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig); --}}

var firebaseConfig = {
	apiKey: "AIzaSyARbKjwBIoFd3yr_kHpQKoL2PaI2FsYkYs",
	authDomain: "sella-client.firebaseapp.com",
	databaseURL: "https://sella-client.firebaseio.com",
	projectId: "sella-client",
	storageBucket: "sella-client.appspot.com",
	messagingSenderId: "18210467530",
	appId: "1:18210467530:web:e5b1e0bdcb09209cd28e33",
	measurementId: "G-M90VVYRJG3"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
{{-- firebase.analytics(); --}}

