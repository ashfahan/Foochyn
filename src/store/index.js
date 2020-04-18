import { combineReducers, createStore, applyMiddleware } from "redux";
import thunk from "redux-thunk";

import * as setting from "./Setting";
import * as user from "./User";
export { setting, user };

const Reduders = combineReducers({
  setting: setting.default,
  user: user.default,
});

export default createStore(Reduders, {}, applyMiddleware(thunk));
