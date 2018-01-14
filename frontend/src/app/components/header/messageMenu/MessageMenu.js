// @flow weak

import React      from 'react';
import DamonIMG   from '../../../img/Damon.png';
import JoeIMG     from '../../../img/Joe.png';
import EmmaIMG    from '../../../img/Emma.png';
import JannieIMG  from '../../../img/Jannie.png';
import EmmetIMG   from '../../../img/Emmet.png';

const MessageMenu = () => (
  <li className="dropdown messages-menu">
    <a
      href="#"
      className="dropdown-toggle"
      data-toggle="dropdown">
      <i className="fa fa-envelope" />
      <span className="label label-success">
        2
      </span>
    </a>
    <ul className="dropdown-menu">
      <li className="header">
        You have 2 messages
      </li>
      <li>
        <ul className="menu">
          <li>
            <a href="#">
              <div className="pull-left">
                <img
                  src={DamonIMG}
                  className="img-circle"
                  alt="User Image"
                />
              </div>
              <h4>
                  Scholarship
              </h4>
              <p>
                Apple offer you a Scholarship! Open now!
              </p>
              <small className="pull-right">
                <i className="fa fa-clock-o"/>
                  5 mins
              </small>
            </a>
          </li>
          <li>
            <a href="#">
              <div className="pull-left">
                <img
                  src={JoeIMG}
                  className="img-circle"
                  alt="user image"
                />
              </div>
              <h4>
                  Class new notifications
              </h4>
              <p>
                Open now! You got new deadline!
              </p>
              <small className="pull-right">
                <i className="fa fa-clock-o" />
                  2 hours
              </small>
            </a>
          </li>
        </ul>
      </li>
      <li className="footer">
        <a href="#">
          See All Messages
        </a>
      </li>
    </ul>
  </li>
);

export default MessageMenu;
