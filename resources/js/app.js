import React from 'react';
import ReactDOM from 'react-dom';
import App from './app';
import { Provider } from 'react-redux';
import store from './Redux/store';
import './styles.css';

ReactDOM.render(
    <Provider store={store}>
        <App />
    </Provider>,
    document.getElementById('app')
);

