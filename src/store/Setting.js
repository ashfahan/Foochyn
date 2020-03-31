//
// Store
//

const initialState = {
  loaded: false,
  city: false
};

// Actions

export const SetLoaded = value => {
  return {
    type: "SetLoaded",
    data: value
  };
};


export const SetCity = value => {
  return {
    type: "SetCity",
    data: value
  };
};

// Reducers

export default function(props = initialState, action) {
  switch (action.type) {
    case "SetLoaded":
      return { ...props, loaded: action.data };
    case "SetCity":
      return { ...props, city: action.data };

    default:
      return props;
  }
}
