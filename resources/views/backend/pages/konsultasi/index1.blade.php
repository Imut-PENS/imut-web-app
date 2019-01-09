@extends('backend.master')

@section('content')
      <!-- Message Sidebar -->
      <div class="page-aside">
        <div class="page-aside-switch">
          <i class="icon md-chevron-left" aria-hidden="true"></i>
          <i class="icon md-chevron-right" aria-hidden="true"></i>
        </div>
        <div class="page-aside-inner">
        
            
            <h3>Users</h3>

          <div class="app-message-list page-aside-scroll">
            <div data-role="container">
              <div data-role="content">
                <ul class="list-group">
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-online" href="javascript:void(0)">
                          <img class="img-fluid" src="../../../../global/portraits/1.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Kerem Sure</h5>
                        <span class="media-time">15 sec ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger">3</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-online" href="javascript:void(0)">
                          <img class="img-fluid" src="../../../../global/portraits/2.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Eric hoffman</h5>
                        <span class="media-time">1 minutes ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-online" href="javascript:void(0)">
                          <img class="img-fluid" src="../../../../global/portraits/3.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Eddie Lobanovskiy</h5>
                        <span class="media-time">5 minutes ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-online" href="javascript:void(0)">
                          <img class="img-fluid" src="../../../../global/portraits/4.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Bill S Kenney</h5>
                        <span class="media-time">15 minutes ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger">5</span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item active">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-away" href="javascript:void(0)">
                          <img class="img-fluid" src="../../../../global/portraits/5.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Derek Bradley</h5>
                        <span class="media-time">40 minutes ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-away" href="javascript:void(0)">
                          <img class="img-fluid" src="../../../../global/portraits/6.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Mariusz Ciesla</h5>
                        <span class="media-time">2 hours ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-online" href="javascript:void(0)">
                          <img class="img-fluid" src="../../../../global/portraits/7.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Jesse Dodds</h5>
                        <span class="media-time">3 hours ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-off" href="javascript:void(0)">
                          <img class="img-fluid" src="../../../../global/portraits/8.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Gerren Lamson</h5>
                        <span class="media-time">3 hours ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-off" href="javascript:void(0)">
                          <img class="img-fluid" src="../../../../global/portraits/9.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Daniel Waldron</h5>
                        <span class="media-time">5 hours ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="pr-20">
                        <a class="avatar avatar-off" href="javascript:void(0)">
                          <img class="img-fluid" src="../../../../global/portraits/10.jpg"
                            alt="..."><i></i></a>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-5">Celikovic</h5>
                        <span class="media-time">7 hours ago</span>
                      </div>
                      <div class="pl-20">
                        <span class="badge badge-pill badge-danger"></span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Message Sidebar -->
      <div class="page-main">
        <!-- Chat Box -->
        <div class="app-message-chats">
          <button type="button" id="historyBtn" class="btn btn-round btn-default btn-flat primary-500">History Messages</button>
          <div class="chats">
            <div class="chat">
              <div class="chat-avatar">
                <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="">
                  <img src="../../../../global/portraits/4.jpg" alt="June Lane">
                </a>
              </div>
              <div class="chat-body">
                <div class="chat-content">
                  <p>
                    Hello. What can I do for you?
                  </p>

                </div>
              </div>
            </div>
            <div class="chat chat-left">
              <div class="chat-avatar">
                <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="">
                  <img src="../../../../global/portraits/5.jpg" alt="Edward Fletcher">
                </a>
              </div>
              <div class="chat-body">
                <div class="chat-content">
                  <p>
                    I'm just looking around.
                  </p>
                  <p>Will you tell me something about yourself? </p>

                </div>
                <div class="chat-content">
                  <p>
                    Are you there? That time!
                  </p>

                </div>
              </div>
            </div>
            <div class="chat">
              <div class="chat-avatar">
                <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="">
                  <img src="../../../../global/portraits/4.jpg" alt="June Lane">
                </a>
              </div>
              <div class="chat-body">
                <div class="chat-content">
                  <p>
                    Where?
                  </p>

                </div>
                <div class="chat-content">
                  <p>
                    OK, my name is Limingqiang. I like singing, playing basketballand so on.
                  </p>

                </div>
              </div>
            </div>
            <p class="time">1 hours ago</p>
            <div class="chat chat-left">
              <div class="chat-avatar">
                <a class="avatar" data-toggle="tooltip" href="#" data-placement="left" title="">
                  <img src="../../../../global/portraits/5.jpg" alt="Edward Fletcher">
                </a>
              </div>
              <div class="chat-body">
                <div class="chat-content">
                  <p>You wait for notice.</p>
                </div>
                <div class="chat-content">
                  <p>Consectetuorem ipsum dolor sit?</p>

                </div>
                <div class="chat-content">
                  <p>OK?</p>

                </div>
              </div>
            </div>
            <div class="chat">
              <div class="chat-avatar">
                <a class="avatar" data-toggle="tooltip" href="#" data-placement="right" title="">
                  <img src="../../../../global/portraits/4.jpg" alt="June Lane">
                </a>
              </div>
              <div class="chat-body">
                <div class="chat-content">
                  <p>OK!</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- End Chat Box -->

        <!-- Message Input-->
        <form class="app-message-input">
          <div class="input-group form-material">
            <span class="input-group-btn">
              <a href="javascript: void(0)" class="btn btn-pure btn-default icon md-camera"></a>
            </span>
            <input class="form-control" type="text" placeholder="Type message here ...">
            <span class="input-group-btn">
              <button type="button" class="btn btn-pure btn-default icon md-mail-send"></button>
            </span>
          </div>
        </form>
        <!-- End Message Input-->

      </div>
      <script src="{{ asset('backend/assets/js/App/Message.js') }}"></script>
    
        <script src="{{ asset('backend/assets/examples/js/apps/message.js') }}"></script>
    @endsection