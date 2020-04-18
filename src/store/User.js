//
// Store
//

const initialState = {
  userType: "ResturantOwner",
};

// Actions

export const SetUserType = (value) => {
  return {
    type: "SetUserType",
    data: value,
  };
};

// Reducers

export default function (props = initialState, action) {
  switch (action.type) {
    case "SetUserType":
      return { ...props, userType: action.data };

    default:
      return props;
  }
}
