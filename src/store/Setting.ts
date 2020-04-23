//
// Store
//

interface Model {}

interface State extends Model {
  loaded: boolean;
  city: false | string;
}

const initialState: State = {
  loaded: false,
  city: false,
};

// Actions

export const SetLoaded = (value: boolean) => {
  return {
    type: "SetLoaded",
    data: value,
  };
};

export const SetCity = (value: false | string) => {
  return {
    type: "SetCity",
    data: value,
  };
};

// Reducers

export default function (props = initialState, action: { type: "SetLoaded" | "SetCity"; data: any }) {
  switch (action.type) {
    case "SetLoaded":
      return { ...props, loaded: action.data };
    case "SetCity":
      return { ...props, city: action.data };

    default:
      return props;
  }
}
