const title = React.createElement(
  'h1',
  {id: 'main title', title: 'This is a title.'},
  'My first react Element'
);

const descr = React.createElement(
  'p',
  null,
  'My first react Element description as a paragraph'
);

const header = React.createElement(
  'header',
  null,
  title, //child elements to include inside the header
  descr
);

//console.log(title);
ReactDOM.render(
  header,
  document.getElementById('root')
);