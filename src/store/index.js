import { combineReducers, createStore, applyMiddleware } from "redux";
import thunk from "redux-thunk";

import * as setting from "./Setting";
export { setting };

const Reduders = combineReducers({
  setting: setting.default
});

export default createStore(Reduders, {}, applyMiddleware(thunk));
