import { combineReducers, createStore, applyMiddleware } from "redux";
import thunk from "redux-thunk";

import * as setting from "./Setting.ts";
import * as user from "./User.ts";
export { setting, user };

const Reduders = combineReducers({
  setting: setting.default,
  user: user.default,
});

export default createStore(Reduders, {}, applyMiddleware(thunk));
