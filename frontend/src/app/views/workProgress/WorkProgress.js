// @flow weak

import React, {
  PureComponent
}                         from 'react';
import PropTypes          from 'prop-types';
import {
  AnimatedView,
  Panel,
  Table,
  TableHeader,
  TableBody,
  TableRow,
  TableCol
}                         from '../../components';
import Highlight          from 'react-highlight';


class WorkProgress extends PureComponent {

  state = {
    headers: ['#', 'Class', 'Location', 'Available', 'Status', 'Register'],
    content: [
      ['1', 'Dark arts defense', 'Hogwarts', <span className="label label-danger">80/85</span>,<span className="badge badge-info">Register</span>,<a href='#' className="label label-success">Register</a>],
      ['2', 'Astronomy', 'Hogwarts', <span className="label label-success">56/78</span>, <span className="badge badge-success">Registered</span>,<a href='#' className="label label-inverse">Register</a>],
      ['3', 'Charms', 'Hogwarts', <span className="label label-warning">80/89</span>, <span className="badge badge-warning">Waiting...</span>,<a href='#' className="label label-inverse">Register</a>],
      ['4', 'Herbology', 'Hogwarts', <span className="label label-info">78/90</span>, <span className="badge badge-info">Register</span>,<a href='#' className="label label-success">Register</a>],
      ['5', 'History of Magic', 'Hogwarts', <span className="label label-warning">89/89</span>, <span className="badge badge-danger">Full</span>,<a href='#' className="label label-inverse">Register</a>],
      ['6', 'Transfiguration', 'Hogwarts', <span className="label label-info">10/10</span>, <span className="badge badge-success">Registered</span>,<a href='#' className="label label-inverse">Register</a>],
      ['7', 'Ancient Studies', 'Hogwarts', <span className="label label-info">34/56</span>, <span className="badge badge-success">Registered</span>,<a href='#' className="label label-inverse">Register</a>]
    ]
  };

  componentWillMount() {
    const { actions: { enterWorkProgress } } = this.props;
    enterWorkProgress();
  }

  componentWillUnmount() {
    const { actions: { leaveWorkProgress } } = this.props;
    leaveWorkProgress();
  }

  render() {
    const {
      headers,
      content
    } = this.state;

    return(
      <AnimatedView>
        {/* preview: */}
        <Panel
          title="Wishlist Class"
          hasTitle={true}
          bodyBackGndColor={'#F4F5F6'}
          bodyCustomClass="table-responsive">
          <Table>
            <TableHeader>
              {
                headers.map(
                  (header, headerIdx) => {
                    return (
                      <TableCol key={headerIdx}>
                        {header}
                      </TableCol>
                    );
                  }
                )
              }
            </TableHeader>
            <TableBody>
              {
                content.map(
                  (contentRow, contentRowIdx) => {
                    return (
                      <TableRow key={contentRowIdx}>
                        {
                          contentRow.map(
                            (contentColumn, contentColumnIdx) => {
                              return (
                                <TableCol key={contentColumnIdx}>
                                  {contentColumn}
                                </TableCol>
                              );
                            }
                          )
                        }
                      </TableRow>
                    );
                  }
                )
              }
            </TableBody>
          </Table>
        </Panel>
        <Panel
          title="All Available Class"
          hasTitle={true}
          bodyBackGndColor={'#F4F5F6'}
          bodyCustomClass="table-responsive">
          <Table>
            <TableHeader>
              {
                headers.map(
                  (header, headerIdx) => {
                    return (
                      <TableCol key={headerIdx}>
                        {header}
                      </TableCol>
                    );
                  }
                )
              }
            </TableHeader>
            <TableBody>
              {
                content.map(
                  (contentRow, contentRowIdx) => {
                    return (
                      <TableRow key={contentRowIdx}>
                        {
                          contentRow.map(
                            (contentColumn, contentColumnIdx) => {
                              return (
                                <TableCol key={contentColumnIdx}>
                                  {contentColumn}
                                </TableCol>
                              );
                            }
                          )
                        }
                      </TableRow>
                    );
                  }
                )
              }
            </TableBody>
          </Table>
        </Panel>
        <Panel
          title="Disabled Class"
          hasTitle={true}
          bodyBackGndColor={'#F4F5F6'}
          bodyCustomClass="table-responsive">
          <Table>
            <TableHeader>
              {
                headers.map(
                  (header, headerIdx) => {
                    return (
                      <TableCol key={headerIdx}>
                        {header}
                      </TableCol>
                    );
                  }
                )
              }
            </TableHeader>
            <TableBody>
              {
                content.map(
                  (contentRow, contentRowIdx) => {
                    return (
                      <TableRow key={contentRowIdx}>
                        {
                          contentRow.map(
                            (contentColumn, contentColumnIdx) => {
                              return (
                                <TableCol key={contentColumnIdx}>
                                  {contentColumn}
                                </TableCol>
                              );
                            }
                          )
                        }
                      </TableRow>
                    );
                  }
                )
              }
            </TableBody>
          </Table>
        </Panel>
      </AnimatedView>
    );
  }
}

WorkProgress.propTypes= {
  actions: PropTypes.shape({
    enterWorkProgress: PropTypes.func.isRequired,
    leaveWorkProgress: PropTypes.func.isRequired
  })
};

export default WorkProgress;
