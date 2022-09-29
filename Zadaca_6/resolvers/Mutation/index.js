const { GraphQLObjectType } = require("graphql");
const insertBrand = require("./insertBrand");

const Mutation = new GraphQLObjectType({
  name: "mutation",
  fields: {
    insertBrand: insertBrand,
  },
});

module.exports = Mutation;
