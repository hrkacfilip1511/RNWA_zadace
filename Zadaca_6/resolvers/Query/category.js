const { GraphQLList } = require("graphql");
const { dbQuery } = require("../../database");
const { CategoryType } = require("../../types");

const fieldsCategory = {
  type: new GraphQLList(CategoryType),
  async resolve(_, {}) {
    let res = await dbQuery(`SELECT * FROM category`);
    return res;
  },
};

module.exports = fieldsCategory;
