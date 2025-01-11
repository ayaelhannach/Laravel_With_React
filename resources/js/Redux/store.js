import { configureStore } from '@reduxjs/toolkit';
import { rootReducer } from './reducers';

const store = configureStore({
    reducer: {
        product: rootReducer, 
    }
});

export default store;
