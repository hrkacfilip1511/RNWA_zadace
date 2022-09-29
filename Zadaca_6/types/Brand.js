const { GraphQLObjectType, GraphQLInt, GraphQLString, GraphQLList } = require('graphql');
const { dbQuery } = require('../database');

const BrandType = new GraphQLObjectType({
  name: 'Brand',
  fields:() => (
    {
      brand_id: { type: GraphQLInt },
      brand_name: { type: GraphQLString },
      brand_active: { type: GraphQLInt },
      brand_status: { type: GraphQLInt }
    }
  ) 
});

module.exports = BrandType;